<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProsesAnalisisModels extends Model
{
    use HasFactory;

    protected $table = 'dossier_analisis';

    protected $fillable = [
        'nomor_dossier',
        'nama_file',
        'path_gambar',
        'status_analisis',
    ];
}
