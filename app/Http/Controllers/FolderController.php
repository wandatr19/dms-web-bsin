<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    // public function index()
    // {
    //     $folders = Folder::all();
    //     return view('folders.index', compact('folders'));
    // }
    // public function create()
    // {
    //     return view('folders.create');
    // }
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //     ]);

    //     Folder::create($validatedData);

    //     return redirect()->route('folders.index')->with('success', 'Folder created successfully');
    // }
    // public function show($id)
    // {
    //     //
    // }
    // public function edit(Folder $folder)
    // {
    //     return view('folders.edit', compact('folder'));
    // }
    // public function update(Request $request, Folder $folder)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //     ]);

    //     $folder->update($validatedData);

    //     return redirect()->route('folders.index')->with('success', 'Folder updated successfully');
    // }
    // public function destroy(Folder $folder)
    // {
    //     $folder->delete();

    //     return redirect()->route('Folders.index')->with('success', 'Folder deleted successfully');
    // }
    public function index()
    {
        return view('folder');
    }
    public function addFolder(Request $request)
    {
        $FolderName = $request->input('name');
        $FolderContent = $request->input('category');

        $FolderPath = resource_path('views/' . $FolderName . '.blade.php');
        Folder::put($FolderPath, $FolderContent);

        return response()->json(['message' => 'File blade berhasil ditambahkan.']);
    }
}
