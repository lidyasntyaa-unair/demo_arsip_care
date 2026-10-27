<?php

namespace Database\Seeders;

use App\Models\AsesmenModels;
use Illuminate\Database\Seeder;

class asesmenSeeder extends Seeder
{
    public function run(): void
    {
        AsesmenModels::create([
            'foto' => 'asesmen/ijazah_sma_1998.jpg',
            'gejala_kerusakan_fisik' => [
                'Kertas Menguning / Asam Rapuh',
                'Tumbuh Jamur / Foxing',
            ],
            'jenis_dokumen' => 'pendidikan_akademik',
            'tahun' => 1998,
        ]);

        AsesmenModels::create([
            'foto' => 'asesmen/akta_lahir_1985.jpg',
            'gejala_kerusakan_fisik' => [
                'Robek / Berlubang / Terpotong',
                'Dimakan Rayap / Serangga',
            ],
            'jenis_dokumen' => 'kependudukan',
            'tahun' => 1985,
        ]);

        AsesmenModels::create([
            'foto' => 'asesmen/buku_nikah_2005.jpg',
            'gejala_kerusakan_fisik' => [
                'Basah Terkena Air / Banjir',
            ],
            'jenis_dokumen' => 'pernikahan_keluarga',
            'tahun' => 2005,
        ]);
    }
}
