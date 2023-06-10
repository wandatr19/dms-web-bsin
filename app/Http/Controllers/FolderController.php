<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::all();
        return view('folder', compact('folders')); 
    }
    public function addFolder(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
        ]);

        $folder = new Folder;
        $folder->name = $validatedData['name'];
        $folder->category = $validatedData['category'];
        $folder->save();

        return redirect()->back()->with('success', 'Folder berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $folder = Folder::find($id);

        if (!$folder) {
            return redirect()->back()->with('error', 'Folder tidak ditemukan!');
        }

        $folder->name = $validatedData['name'];
        $folder->save();

        return redirect()->back();
    }
    public function main()
    {
        $folders = Folder::all();
        return view('folders.main', compact('folders'));
    }
    public function mech()
    {
        $folders = Folder::all();
        return view('folders.mech', compact('folders'));
    }
    public function elect()
    {
        $folders = Folder::all();
        return view('folders.elect', compact('folders'));
    }
}
