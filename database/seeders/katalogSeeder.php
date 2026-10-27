<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class katalogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('katalog')->insert([
            [
                'id_produk' => 1,
                'nama_produk' => 'Kertas Pelindung Arsip Bebas Asam',
                'harga' => 45000.00,
                'gambar' => 'produk/kertas_pelindung_arsip.jpg',
                'link_shopee' => 'https://shopee.co.id/',
                'badge' => 'STANDAR ARSIP',
                'created_at' => now(),
            ],
            [
                'id_produk' => 2,
                'nama_produk' => 'Map Penyimpanan Dokumen',
                'harga' => 30000.00,
                'gambar' => 'produk/map_penyimpanan.jpg',
                'link_shopee' => 'https://shopee.co.id/',
                'badge' => 'REKOMENDASI',
                'created_at' => now(),
            ],
        ]);
    }
}
