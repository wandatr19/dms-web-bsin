<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\PasswordDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OthersController extends Controller
{
    public function index()
    {
        $documents = Document::orderBy('doc_name')->get();
        return view('others.others', compact('documents'));
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
            $path = $file->store('others', 'public');

            // Simpan data dokumen ke dalam database
            $document = new Document;
            $document->doc_name = $file_name;
            $document->category = "others";
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
            // Tindakan lain setelah penghapusan data
            return redirect()->route('oth')->with('success', 'Pengguna Berhasil Dihapus!');
        }
    }
    public function destroy($category)
    {
        $documents = Document::where('category', $category)->get();
        foreach ($documents as $document) {
            Storage::disk('public')->delete($document->path);
            $document->delete();
        }
        return redirect()->route('oth')->with('success', 'Dokumen Others Berhasil Dihapus');
    }
    public function password(Request $request, $id)
    {
        $password = $request->input('password');
        $passwordDoc = PasswordDoc::find(1);
        $document = Document::findOrFail($id);

        if ($password === $passwordDoc->password) {
            return redirect()->route('open-oth', $document->id);
        } else {
            return back()->with('failed', 'Password yang dimasukan salah');
        }
    }
}
