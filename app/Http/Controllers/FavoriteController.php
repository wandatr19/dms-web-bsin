<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Favorite;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function addFav(Request $request, Document $document)
    {
        $user = $request->user();

        if ($user->favorites()->where('document_id', $document->id)->exist()) {
        }
        $favorite = new Favorite();
        $favorite = user_id = $user->id;
    }
}
