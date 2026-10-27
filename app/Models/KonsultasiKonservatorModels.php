<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KonsultasiKonservatorModels extends Model
{
    use HasFactory;

    protected $table = 'konsultasi_konservator';
    protected $primaryKey = 'id_konsultasi';

    protected $fillable = [
        'pertanyaan',
        'jawaban',
        'nama_file',
        'path_file',
        'tipe_file',
        'ukuran_file',
        'status_konsultasi',
    ];
}
