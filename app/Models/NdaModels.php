<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NdaModels extends Model
{
    use HasFactory;

    protected $table = 'nda';

    protected $fillable = [
        'id_user',
        'versi_nda',
        'persetujuan',
        'tanggal_persetujuan',
    ];

    protected $casts = [
        'persetujuan' => 'boolean',
        'tanggal_persetujuan' => 'datetime',
    ];
}
