<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisModels extends Model
{
    use HasFactory;

    protected $table = 'analisis_dokumen';
    protected $primaryKey = 'id_analisis';

    protected $fillable = [
        'nama_file',
        'path_file',
        'ukuran_file_mb',
        'tipe_file',
        'status_analisis',
        'hasil_analisis',
    ];

    protected $casts = [
        'ukuran_file_mb' => 'float',
    ];
}
