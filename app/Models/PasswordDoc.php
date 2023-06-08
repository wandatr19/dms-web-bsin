<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordDoc extends Model
{
    use HasFactory;

    protected $table = 'password_docs';
    protected $fillable = ['password'];
}
