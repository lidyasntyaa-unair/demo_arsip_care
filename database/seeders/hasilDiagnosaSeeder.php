<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HasilDiagnosaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laporan_medis_arsip')->insert([
            [
                'registrasi_berkas' => 'ARC-DIAG-001',
                'estimasi_derajat_asam' => 4.8,
                'indeks_kerapuhan_serat' => 72,
                'status_infeksi_biologis' => 'Indikasi jamur',
                'rekomendasi_prosedur_kuratif' =>
                    'Pisahkan dokumen dari bahan lain dan lakukan pemeriksaan kondisi oleh petugas konservasi.',
                'pilihan_langkah_pemulihan' => 'Profesional',
                'rekomendasi_solusi_diy_mandiri' =>
                    'Simpan sementara di tempat kering, bersih, dan berventilasi baik. Hindari membersihkan jamur sendiri.',
                'solusi_profesional' =>
                    'Diperlukan pemeriksaan konservator untuk menentukan penanganan jamur dan kertas rapuh.',
                'created_at' => now(),
            ],
            [
                'registrasi_berkas' => 'ARC-DIAG-002',
                'estimasi_derajat_asam' => 5.6,
                'indeks_kerapuhan_serat' => 45,
                'status_infeksi_biologis' => 'Tidak terindikasi',
                'rekomendasi_prosedur_kuratif' =>
                    'Lakukan pemeriksaan kondisi fisik dan penanganan ringan sesuai karakter bahan dokumen.',
                'pilihan_langkah_pemulihan' => 'DIY',
                'rekomendasi_solusi_diy_mandiri' =>
                    'Tangani dengan tangan bersih dan kering, simpan dalam wadah pelindung yang sesuai, serta hindari paparan cahaya dan kelembapan berlebih.',
                'solusi_profesional' =>
                    'Konsultasikan dengan konservator jika kerusakan bertambah atau dokumen memiliki nilai penting.',
                'created_at' => now(),
            ],
            [
                'registrasi_berkas' => 'ARC-DIAG-003',
                'estimasi_derajat_asam' => 3.9,
                'indeks_kerapuhan_serat' => 88,
                'status_infeksi_biologis' => 'Perlu pemeriksaan lanjut',
                'rekomendasi_prosedur_kuratif' =>
                    'Batasi penanganan langsung dan lakukan asesmen lanjutan sebelum tindakan perbaikan.',
                'pilihan_langkah_pemulihan' => 'Profesional',
                'rekomendasi_solusi_diy_mandiri' =>
                    'Jangan melipat, menggosok, atau menggunakan cairan pembersih pada dokumen yang rapuh.',
                'solusi_profesional' =>
                    'Minta pemeriksaan konservator untuk menentukan tindakan konservasi yang sesuai.',
                'created_at' => now(),
            ],
        ]);
    }
}
