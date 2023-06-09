<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\History;
use App\Models\PasswordDoc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;


class BanburyController extends Controller
{
    public function banbury()
    {
        $documents = Document::all();
        $users = User::pluck('user_access')->toArray();
        return view('mechanical.layer2.banbury', [
            'documents' => $documents,
            'users' => $users
        ]);
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $size = $file->getSize();
            $sizeInMegabytes = round($size / (1024 * 1024), 2);
            // Validasi file
            $request->validate([
                'file' => 'required|mimes:pdf|max:10000000'
            ]);

            // Simpan file ke dalam folder 'documents' di dalam direktori 'storage/app/public'
            $path = $file->store('mechanical/banbury', 'public');

            // Simpan data dokumen ke dalam database
            $document = new Document;
            $document->doc_name = $file_name;
            $document->category = "banbury";
            $document->path = $path;
            $document->size = $sizeInMegabytes;
            $document->save();

            return response()->json([
                'message' => 'Dokumen berhasil diunggah',
                'document' => $document
            ], 201);
        }

        return response()->json([
            'message' => 'Tidak ada file yang diunggah'
        ], 400);
    }
    public function open(Request $request, $id)
    {
        $document = Document::findOrFail($id);
        $user = $request->user();
        $filePath = storage_path('app/public/' . $document->path);
        if (file_exists($filePath)) {
            activity()
                ->causedBy($user)
                ->performedOn($document)
                ->withProperties($document->doc_name)
                ->log("Open {$document->doc_name}");
            return response()->file($filePath, ['Content-Disposition' => 'inline']);
        } else {
            // File tidak ditemukan, tangani kasus ini sesuai kebutuhan aplikasi Anda
            // ...
        }
    }
    public function view($id)
    {
        $document = Document::findOrFail($id);
        $filePath = storage_path('app/public/' . $document->path);
        if (file_exists($filePath)) {
            $pdfData = base64_encode(file_get_contents($filePath));
            return view('openpdf', compact('pdfData'));
        } else {
        }
    }
    public function delete($id)
    {
        $document = Document::find($id);
        if ($document) {
            $path = $document->path;
            Storage::disk('public')->delete($path);
            $document->delete();
            return redirect()->route('banbury')->with('success', 'Dokumen Berhasil Dihapus!');
        }
    }
    public function destroy($category)
    {
        $documents = Document::where('category', $category)->get();
        foreach ($documents as $document) {
            Storage::disk('public')->delete($document->path);
            $document->delete();
        }
        return redirect()->route('polyfilm')->with('success', 'Dokumen Banbury Berhasil Dihapus');
    }
    public function verifPw(Request $request, $id)
    {
        $password = $request->input('password');
        $passwordDoc = PasswordDoc::find(1);
        $document = Document::findOrFail($id);

        if ($password === $passwordDoc->password) {
            return redirect()->route('show-banbury', $document->id);
        } else {
            return back()->with('failed', 'Password yang dimasukan salah');
        }
    }
}
