<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Document extends Model
{
    use HasFactory, LogsActivity;
    protected static $logAttributes = ['doc_name'];
    protected $fillable = [
        'doc_name',
        'path',
        'category',
        'user_access',
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['doc_name'])
            ->logOnlyDirty();
    }

    public static function search($keyword)
    {
        return self::where('doc_name', 'LIKE', "%$keyword%")->get();
    }



}
