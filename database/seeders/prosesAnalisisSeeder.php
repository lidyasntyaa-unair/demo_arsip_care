<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DossierAnalisisSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            [
                'nomor_dossier'   => 'ARC-2026-001',
                'nama_file'       => 'surat_keputusan_direksi_001.pdf',
                'path_gambar'     => 'uploads/arsip-care/dossier/2026/surat_keputusan_direksi_001.jpg',
                'status_analisis' => 'completed',
                'created_at'      => $now->copy()->subHours(6),
                'updated_at'      => $now->copy()->subHours(5),
            ],
            [
                'nomor_dossier'   => 'ARC-2026-002',
                'nama_file'       => 'laporan_keuangan_q1_002.pdf',
                'path_gambar'     => 'uploads/arsip-care/dossier/2026/laporan_keuangan_q1_002.jpg',
                'status_analisis' => 'processing',
                'created_at'      => $now->copy()->subHours(2),
                'updated_at'      => $now->copy()->subMinutes(10),
            ],
            [
                'nomor_dossier'   => 'ARC-2026-003',
                'nama_file'       => 'berkas_kontrak_kerjasama_003.pdf',
                'path_gambar'     => 'uploads/arsip-care/dossier/2026/berkas_kontrak_kerjasama_003.jpg',
                'status_analisis' => 'pending',
                'created_at'      => $now->copy()->subMinutes(45),
                'updated_at'      => $now->copy()->subMinutes(45),
            ],
            [
                'nomor_dossier'   => 'ARC-2026-004',
                'nama_file'       => 'dokumen_kepegawaian_sdm_004.pdf',
                'path_gambar'     => 'uploads/arsip-care/dossier/2026/dokumen_kepegawaian_sdm_004.jpg',
                'status_analisis' => 'pending',
                'created_at'      => $now->copy()->subMinutes(15),
                'updated_at'      => $now->copy()->subMinutes(15),
            ],
            [
                'nomor_dossier'   => 'ARC-2026-005',
                'nama_file'       => 'laporan_audit_internal_005.pdf',
                'path_gambar'     => 'uploads/arsip-care/dossier/2026/laporan_audit_internal_005.jpg',
                'status_analisis' => 'completed',
                'created_at'      => $now->copy()->subDays(1),
                'updated_at'      => $now->copy()->subDays(1)->addHours(2),
            ],
        ];

        DB::table('dossier_analisis')->insert($data);
    }
}
