<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class prosesAnalisisSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('dossier_analisis')->insert([
            [
                'nomor_dossier' => 'ARC-2026-001',
                'nama_file' => 'surat_keputusan_direksi_001.pdf',
                'path_gambar' => 'uploads/arsip-care/dossier/2026/surat_keputusan_direksi_001.jpg',
                'status_analisis' => 'completed',
                'created_at' => $now->copy()->subHours(6),
                'updated_at' => $now->copy()->subHours(5),
            ],
            [
                'nomor_dossier' => 'ARC-2026-002',
                'nama_file' => 'laporan_keuangan_q1_002.pdf',
                'path_gambar' => 'uploads/arsip-care/dossier/2026/laporan_keuangan_q1_002.jpg',
                'status_analisis' => 'processing',
                'created_at' => $now->copy()->subHours(2),
                'updated_at' => $now->copy()->subMinutes(10),
            ],
        ]);
    }
}
