<?php

namespace Database\Seeders;

use App\Models\Asesmen;
use Illuminate\Database\Seeder;

class AsesmenSeeder extends Seeder
{
    public function run(): void
    {
        Asesmen::create([
            'foto' => 'asesmen/ijazah_sma_1998.jpg',
            'gejala_kerusakan_fisik' => [
                'Kertas Menguning / Asam Rapuh',
                'Tumbuh Jamur / Foxing',
            ],
            'jenis_dokumen' => 'pendidikan_akademik',
            'tahun' => 1998,
        ]);

        Asesmen::create([
            'foto' => 'asesmen/akta_lahir_1985.jpg',
            'gejala_kerusakan_fisik' => [
                'Robek / Berlubang / Terpotong',
                'Dimakan Rayap / Serangga',
            ],
            'jenis_dokumen' => 'kependudukan',
            'tahun' => 1985,
        ]);

        Asesmen::create([
            'foto' => 'asesmen/buku_nikah_2005.jpg',
            'gejala_kerusakan_fisik' => [
                'Basah Terkena Air / Banjir',
            ],
            'jenis_dokumen' => 'pernikahan_keluarga',
            'tahun' => 2005,
        ]);

        Asesmen::create([
            'foto' => 'asesmen/naskah_kuno.jpg',
            'gejala_kerusakan_fisik' => [
                'Tinta Luntur / Melekat Kaca',
                'Kertas Menguning / Asam Rapuh',
            ],
            'jenis_dokumen' => 'naskah_arsip_kuno',
            'tahun' => null,
        ]);
    }
}
