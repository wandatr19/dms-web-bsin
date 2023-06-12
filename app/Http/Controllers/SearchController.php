<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\PasswordDoc;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchUser(Request $request)
    {
        $keyword = $request->input('keyword');
        $documents = Document::search($keyword);

        foreach ($documents as $document) {
            $document->doc_name = str_ireplace($keyword, '<span class="highlight">' . $keyword . '</span>', $document->doc_name);
        }
        return view('search', compact('documents'));
    }
    public function open($id)
    {
        $document = Document::findOrFail($id);
        $filePath = storage_path('app/public/' . $document->path);
        if (file_exists($filePath)) {
            activity()
                ->causedBy(auth()->user())
                ->performedOn($document)
                ->withProperties($document->doc_name)
                ->log(auth()->user()->name . ' (Opened)');
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
    public function password(Request $request, $id)
    {
        $password = $request->input('password');
        $passwordDoc = PasswordDoc::find(1);
        $document = Document::findOrFail($id);

        if ($password === $passwordDoc->password) {
            return redirect()->route('open-doc', $document->id);
        } else {
            return back()->with('failed', 'Password yang dimasukan salah');
        }
    }
}
