<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Favorite;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_access',
        'role',
        'department',
    ];
    protected static $logAttributes = ['name'];

    public function getActivitylogOptions(): LogOptions
    {
        $logOptions = new LogOptions();

        // Mengatur aktivitas yang akan direkam
        $logOptions->logOnly(['read']);
        $logOptions->logExcept(['created', 'updated', 'deleted']);

        return $logOptions;
    }
    public function getDescriptionForEvent(string $eventName): string
    {

        return "User {$this->name} $eventName";
    }


    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'user_access' => 'array',
    ];
}
