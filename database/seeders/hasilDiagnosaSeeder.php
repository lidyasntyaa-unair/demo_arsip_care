<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hasilDiagnosaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporan_medis_arsip')->insert([
            [
                'registrasi_berkas' => 'ARC-DIAG-001',
                'estimasi_derajat_asam' => 4.8,
                'indeks_kerapuhan_serat' => 72,
                'status_infeksi_biologis' => 'Indikasi jamur',
                'rekomendasi_prosedur_kuratif' => 'Pisahkan dokumen dari bahan lain dan lakukan pemeriksaan kondisi oleh petugas konservasi.',
                'pilihan_langkah_pemulihan' => 'Profesional',
                'rekomendasi_solusi_diy_mandiri' => 'Simpan sementara di tempat kering, bersih, dan berventilasi baik.',
                'solusi_profesional' => 'Diperlukan pemeriksaan konservator untuk menentukan penanganan jamur.',
                'created_at' => now(),
            ],
            [
                'registrasi_berkas' => 'ARC-DIAG-002',
                'estimasi_derajat_asam' => 5.6,
                'indeks_kerapuhan_serat' => 45,
                'status_infeksi_biologis' => 'Tidak terindikasi',
                'rekomendasi_prosedur_kuratif' => 'Lakukan pemeriksaan kondisi fisik dan penanganan ringan.',
                'pilihan_langkah_pemulihan' => 'DIY',
                'rekomendasi_solusi_diy_mandiri' => 'Tangani dengan tangan bersih dan kering, simpan dalam wadah pelindung.',
                'solusi_profesional' => 'Konsultasikan dengan konservator jika kerusakan bertambah.',
                'created_at' => now(),
            ],
        ]);
    }
}
