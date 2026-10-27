<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilKonsultasiKonservatorModels extends Model
{
    use HasFactory;

    protected $table = 'riwayat_konsultasi';
    protected $primaryKey = 'id_riwayat';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'judul_obrolan',
        'status_obrolan',
        'created_at',
    ];

    protected $casts = [
        'id_user' => 'integer',
        'created_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
