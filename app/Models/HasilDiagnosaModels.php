<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilDiagnosaModels extends Model
{
    use HasFactory;

    protected $table = 'laporan_medis_arsip';
    protected $primaryKey = 'id_laporan';
    public $timestamps = false;

    protected $fillable = [
        'registrasi_berkas',
        'estimasi_derajat_asam',
        'indeks_kerapuhan_serat',
        'status_infeksi_biologis',
        'rekomendasi_prosedur_kuratif',
        'pilihan_langkah_pemulihan',
        'rekomendasi_solusi_diy_mandiri',
        'solusi_profesional',
        'created_at',
    ];

    protected $casts = [
        'estimasi_derajat_asam' => 'decimal:1',
        'indeks_kerapuhan_serat' => 'integer',
        'created_at' => 'datetime',
    ];
}
