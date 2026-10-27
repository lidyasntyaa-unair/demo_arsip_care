<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenModels extends Model
{
    use HasFactory;

    protected $table = 'asesmen';

    protected $fillable = [
        'foto',
        'gejala_kerusakan_fisik',
        'jenis_dokumen',
        'tahun',
    ];

    protected function casts(): array
    {
        return [
            'gejala_kerusakan_fisik' => 'array',
            'tahun' => 'integer',
        ];
    }
}
