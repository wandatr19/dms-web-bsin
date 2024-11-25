<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\PasswordDoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PolyfilmController extends Controller
{
    public function index()
    {
        $documents = Document::orderBy('doc_name')->get();
        return view('mechanical.layer2.polyfilm', compact('documents'));
    }
    public function upload(Request $request)
    {
        activity()->withoutLogs(function () use ($request) {
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file_name = $file->getClientOriginalName();
                $size = $file->getSize();
                $sizeInMegabytes = round($size / (1024 * 1024), 2);
                $request->validate([
                    'file' => 'required|mimes:pdf|max:10000000'
                ]);

                // Simpan file ke dalam folder 'documents' di dalam direktori 'storage/app/public'
                $path = $file->store('mechanical/polyfilm', 'public');

                // Simpan data dokumen ke dalam database
                $document = new Document;
                $document->doc_name = $file_name;
                $document->category = "polyfilm";
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
        });
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
    public function delete($id)
    {
        activity()->withoutLogs(function () use ($id) {
            $document = Document::find($id);
            if ($document) {
                $path = $document->path;
                Storage::disk('public')->delete($path);
                $document->delete();
            }
        });
        return redirect()->route('polyfilm')->with('success', 'Dokumen Berhasil Dihapus!');
    }
    public function destroy($category)
    {
        activity()->withoutLogs(function () use ($category) {
            $documents = Document::where('category', $category)->get();
            foreach ($documents as $document) {
                Storage::disk('public')->delete($document->path);
                $document->delete();
            }
        });
        return redirect()->route('polyfilm')->with('success', 'Dokumen polyfilm Berhasil Dihapus');
    }
    public function password(Request $request, $id)
    {
        $password = $request->input('password');
        $passwordDoc = PasswordDoc::find(1);
        $document = Document::findOrFail($id);

        if ($password === $passwordDoc->password) {
            return redirect()->route('open-polyfilm', $document->id);
        } else {
            return back()->with('failed', 'Password yang dimasukan salah');
        }
    }
}
