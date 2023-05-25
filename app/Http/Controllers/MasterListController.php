<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Document;
use File;
// use Response;

class MasterListController extends Controller
{
    //
    public function mstrlist()
    {
        $documents = Document::all();
        return view('masterlist', ['documents' => $documents]);
    }
    public function upload(Request $request)
    {
        $file = $request->file('pdf_file');
        $file_name = $file->getClientOriginalName();
        $size = $file->getSize();
        $sizeInMegabytes = round($size / (1024 * 1024), 2);
        $path = $file->store('masterlist');

        $data = new Document();
        $data->doc_name = $file_name;
        $data->category = "masterlist";
        $data->path = $path;
        $data->size = $sizeInMegabytes;
        $data->save();

        return redirect()->route('masterlist')->with('success', 'Pengguna Berhasil Ditambahkan!');
    }
    public function show($id)
    {
        $document = Document::findOrFail($id);
        $filePath = storage_path('app/' . $document->path);
        if (file_exists($filePath)) {
            // Mengirimkan file sebagai respons HTTP dengan nama asli
            return response()->file($filePath, ['Content-Disposition' => 'inline']);
        } else {
            // File tidak ditemukan, tangani kasus ini sesuai kebutuhan aplikasi Anda
            // ...
        }
    }
    public function delete($id)
    {
        $document = Document::find($id);
        if ($document) {
            $document->delete();
            // Tindakan lain setelah penghapusan data
            return redirect()->route('masterlist')->with('success', 'Pengguna Berhasil Dihapus!');
        }
    }
        
    
   
}
