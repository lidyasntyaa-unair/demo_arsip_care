<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormJasaKonservatorModels extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_konservator';
    protected $primaryKey = 'id_pengajuan';

    protected $fillable = [
        'jenis_dokumen',
        'dimensi_fisik',
        'tahun_dokumen',
        'no_dokumen',
        'narasi_kerusakan',
        'foto_tampak_depan',
        'foto_tampak_belakang',
        'foto_closeup_makro',
        'metode_logistik',
        'biaya_logistik',
        'persetujuan_pemohon',
        'tanggal_pengajuan',
        'status_pengajuan',
    ];

    protected function casts(): array
    {
        return [
            'tahun_dokumen' => 'integer',
            'biaya_logistik' => 'decimal:2',
            'persetujuan_pemohon' => 'boolean',
            'tanggal_pengajuan' => 'datetime',
        ];
    }
}
