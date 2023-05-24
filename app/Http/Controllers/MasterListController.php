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
        return view('masterlist');
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
        $document = Document::find($id);

        if ($document) {
            return Response::make($document->pdf_data, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $document->doc_name . '.pdf"',
            ]);
        } else {
            return abort(404);
        }
    }
        
    
   
}
