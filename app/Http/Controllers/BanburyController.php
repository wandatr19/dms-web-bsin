<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Document;

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
            $path = $file->store('mechanical/banbury');

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
    public function deleteUser($id)
    {
        $document = Document::find($id);
        if ($document) {
            $document->delete();
            // Tindakan lain setelah penghapusan data
            return redirect()->route('banbury')->with('success', 'Pengguna Berhasil Dihapus!');
        }
    }
    public function show($id)
    {
        $document = Document::findOrFail($id);
        // $fileName = $document->doc_name;
        $filePath = storage_path('app/' . $document->path);
        if (file_exists($filePath)) {
            // Mengirimkan file sebagai respons HTTP dengan nama asli
            return response()->file($filePath, ['Content-Disposition' => 'inline']);
        } else {
            // File tidak ditemukan, tangani kasus ini sesuai kebutuhan aplikasi Anda
            // ...
        }
    }

    public function deleteAll($category)
    {
        Document::where('category', $category)->delete();
        return redirect()->route('banbury')->with('success', 'Dokumen Banbury Berhasil Dihapus');
    }
}
