<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function searchUser(Request $request)
    {
        $keyword = $request->input('keyword');
        $documents = Document::search($keyword);
        return view('search', compact('documents'));
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
}
