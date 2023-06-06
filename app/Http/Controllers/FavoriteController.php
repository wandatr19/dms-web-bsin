<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Favorite;
use App\Models\User;


use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function add(Request $request, Document $document)
    {
        $user = $request->user();

        if ($user->favorites()->where('document_id', $document->id)->count() > 0) {
            return response()->json(['message' => 'Dokumen sudah ditandai sebagai favorit.'], 422);
        }
        $favorite = new Favorite();
        $favorite->user_id = $user->id;
        $favorite->document_id = $document->id;
        $favorite->save();

    }
}
