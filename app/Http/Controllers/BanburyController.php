<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class BanburyController extends Controller
{
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
}
