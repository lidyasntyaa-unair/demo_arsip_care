<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KatalogModels extends Model
{
    use HasFactory;

    protected $table = 'katalog';
    protected $primaryKey = 'id_produk';
    public $timestamps = false;

    protected $fillable = [
        'nama_produk',
        'harga',
        'gambar',
        'link_shopee',
        'badge',
        'created_at',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'created_at' => 'datetime',
    ];
}
