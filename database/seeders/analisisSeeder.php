<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class analisisSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('analisis_dokumen')->insert([
            [
                'id_analisis' => 1,
                'nama_file' => 'Ijazah_SMA_1998_Basah.jpg',
                'path_file' => 'uploads/analisis/ijazah_sma.jpg',
                'ukuran_file_mb' => 2.40,
                'tipe_file' => 'image/jpeg',
                'status_analisis' => 'siap_dianalisis',
                'hasil_analisis' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_analisis' => 2,
                'nama_file' => 'Sertifikat_Tanah_Kuno.pdf',
                'path_file' => 'uploads/analisis/sertifikat_tanah.pdf',
                'ukuran_file_mb' => 3.20,
                'tipe_file' => 'application/pdf',
                'status_analisis' => 'siap_dianalisis',
                'hasil_analisis' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_analisis' => 3,
                'nama_file' => 'Surat_Keluarga_Robek.png',
                'path_file' => 'uploads/analisis/surat_keluarga.png',
                'ukuran_file_mb' => 1.80,
                'tipe_file' => 'image/png',
                'status_analisis' => 'selesai',
                'hasil_analisis' => 'Dokumen menunjukkan kerusakan fisik akibat lipatan berlebih dan kerapuhan serat kertas.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
