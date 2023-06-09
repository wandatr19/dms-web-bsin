<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class UtilityController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        $users = User::pluck('user_access')->toArray();
        return view('utility.utility', [
            'documents' => $documents,
            'users' => $users
        ]);
    }
    public function store(Request $request)
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
            $path = $file->store('utility', 'public');

            // Simpan data dokumen ke dalam database
            $document = new Document;
            $document->doc_name = $file_name;
            $document->category = "utility";
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
    public function show($id)
    {
        $document = Document::findOrFail($id);
        // $fileName = $document->doc_name;
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
            $document->delete();
            // Tindakan lain setelah penghapusan data
            return redirect()->route('util')->with('success', 'Pengguna Berhasil Dihapus!');
        }
    }
    public function deleteAll($category)
    {
        Document::where('category', $category)->delete();
        return redirect()->route('util')->with('success', 'Dokumen Utility Berhasil Dihapus');
    }
}
