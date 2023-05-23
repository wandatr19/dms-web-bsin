<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use File;
use Response;

class MasterListController extends Controller
{
    //
    public function mstrlist()
    {
        return view('masterlist');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $path = $file->store('pdfs'); // Simpan file di folder "storage/app/pdfs"

            // Simpan path file PDF ke dalam session
            session(['storage/app/pdfs/' => $path]);
        }

        return redirect()->back();
    }
        
    
   
}
