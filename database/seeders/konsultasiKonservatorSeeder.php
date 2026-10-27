<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class konsultasiKonservatorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('konsultasi_konservator')->insert([
            [
                'id_konsultasi' => 1,
                'pertanyaan' => 'Cara mengeringkan ijazah basah tanpa merusak tinta tulisan tangan?',
                'jawaban' => 'Hindari panas langsung dan jangan menggosok permukaan dokumen.',
                'nama_file' => 'ijazah_basah.pdf',
                'path_file' => null,
                'tipe_file' => 'application/pdf',
                'ukuran_file' => 204800,
                'status_konsultasi' => 'dijawab',
                'created_at' => '2026-10-20 09:00:00',
                'updated_at' => '2026-10-20 09:05:00',
            ],
            [
                'id_konsultasi' => 2,
                'pertanyaan' => 'Bagaimana menangani noda jamur pada sertifikat tanah kuno?',
                'jawaban' => null,
                'nama_file' => null,
                'path_file' => null,
                'tipe_file' => null,
                'ukuran_file' => null,
                'status_konsultasi' => 'menunggu_jawaban',
                'created_at' => '2026-10-21 10:30:00',
                'updated_at' => '2026-10-21 10:30:00',
            ],
        ]);
    }
}
