<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterView extends Model
{
    use HasFactory;

    // Menghubungkan Model langsung ke SQL Database View
    protected $table = 'view_master_layanan';
    protected $primaryKey = 'id_pengajuan';
    public $timestamps = false;

    protected $casts = [
        'tahun_dokumen' => 'integer',
        'biaya_logistik' => 'decimal:2',
        'total_investasi' => 'decimal:2',
        'estimasi_derajat_asam' => 'float',
        'indeks_kerapuhan_serat' => 'integer',
        'tanggal_pengajuan' => 'datetime',
    ];
}
