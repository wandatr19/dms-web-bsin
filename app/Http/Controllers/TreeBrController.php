<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Folder;
use Illuminate\Http\Request;

class TreeBrController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        $folders = Folder::all();
        return view('treebranch', [
            'documents' => $documents,
            'folders' => $folders,
        ]);
    }
    public function view($id)
    {
        $document = Document::findOrFail($id);
        $filePath = storage_path('app/public/' . $document->path);
        if (file_exists($filePath)) {
            activity()
                ->causedBy(auth()->user())
                ->performedOn($document)
                ->withProperties($document->doc_name)
                ->log(auth()->user()->name . ' (View)');
            $pdfData = base64_encode(file_get_contents($filePath));
            return view('openpdf', compact('pdfData'));
        } else {
        }
    }
}
