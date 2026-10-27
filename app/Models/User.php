<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users'; // Mengarah ke tabel users
    public $timestamps = false;

    protected $fillable = [
        'username',
        'email',
        'no_telepon',
        'password',
        'role',
        'created_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
