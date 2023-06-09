<?php

namespace App\Http\Controllers;

use App\Models\PasswordDoc;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;


class StrainerController extends Controller
{
    public function strainer()
    {
        $documents = Document::all();
        $users = User::pluck('user_access')->toArray();
        return view('mechanical.layer2.strainer', [
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
            $path = $file->store('mechanical/strainer', 'public');

            // Simpan data dokumen ke dalam database
            $document = new Document;
            $document->doc_name = $file_name;
            $document->category = "strainer";
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
    public function open($id)
    {
        $document = Document::findOrFail($id);
        $filePath = storage_path('app/public' . $document->path);
        if (file_exists($filePath)) {
            // Mengirimkan file sebagai respons HTTP dengan nama asli
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
            return redirect()->route('strainer')->with('success', 'Pengguna Berhasil Dihapus!');
        }
    }
    public function destroy($category)
    {
        $documents = Document::where('category', $category)->get();
        foreach ($documents as $document) {
            Storage::disk('public')->delete($document->path);
            $document->delete();
        }
        return redirect()->route('strainer')->with('success', 'Dokumen Strainer Berhasil Dihapus');
    }
    public function verifPw(Request $request, $id)
    {
        $password = $request->input('password');
        $passwordDoc = PasswordDoc::find(1);
        $document = Document::findOrFail($id);

        if ($password === $passwordDoc->password) {
            return redirect()->route('open-strain', $document->id);
        } else {
            return back()->with('failed', 'Password yang dimasukan salah');
        }
    }
}
