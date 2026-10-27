<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderKonservatorModels extends Model
{
    use HasFactory;

    protected $table = 'orders_konservator';

    protected $fillable = [
        'jenis_dokumen',
        'tahun_dokumen',
        'no_dokumen',
        'rincian_kerusakan',
        'pilihan_logistik',
        'biaya_logistik',
        'tingkat_ph',
        'kelembapan',
        'status_rekomendasi',
        'biaya_deasidifikasi',
        'biaya_mending',
        'biaya_enkapsulasi',
        'biaya_ultrasonic',
        'subtotal_tindakan',
        'total_investasi',
    ];

    protected $casts = [
        'tahun_dokumen' => 'integer',
        'biaya_logistik' => 'decimal:2',
        'biaya_deasidifikasi' => 'decimal:2',
        'biaya_mending' => 'decimal:2',
        'biaya_enkapsulasi' => 'decimal:2',
        'biaya_ultrasonic' => 'decimal:2',
        'subtotal_tindakan' => 'decimal:2',
        'total_investasi' => 'decimal:2',
    ];
}
