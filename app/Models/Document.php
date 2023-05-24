<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'doc_name',
        'path',
        'category',
    ];

    public static function search($keyword)
    {
        return self::where('doc_name', 'LIKE', "%$keyword%")->get();
    }



}
