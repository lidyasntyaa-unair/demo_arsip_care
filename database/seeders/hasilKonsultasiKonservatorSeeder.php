<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hasilKonsultasiKonservatorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('riwayat_konsultasi')->insert([
            [
                'id_riwayat' => 1,
                'id_user' => 1,
                'judul_obrolan' => 'Konsultasi dokumen menguning',
                'status_obrolan' => 'Aktif',
                'created_at' => now()->subDays(2),
            ],
            [
                'id_riwayat' => 2,
                'id_user' => 2,
                'judul_obrolan' => 'Konsultasi naskah kuno rapuh',
                'status_obrolan' => 'Arsip',
                'created_at' => now()->subDay(),
            ],
        ]);

        DB::table('kartu_rekomendasi')->insert([
            [
                'id_rekomendasi' => 1,
                'judul_layanan' => 'Konsultasi awal konservasi',
                'deskripsi_layanan' => 'Pemeriksaan awal untuk memahami kondisi dan kebutuhan penanganan dokumen.',
                'estimasi_waktu' => '1-2 hari kerja',
            ],
            [
                'id_rekomendasi' => 2,
                'judul_layanan' => 'Pemeriksaan dokumen rapuh',
                'deskripsi_layanan' => 'Penilaian kondisi dokumen yang rapuh, robek, atau menunjukkan indikasi jamur.',
                'estimasi_waktu' => '3-5 hari kerja',
            ],
        ]);
    }
}
