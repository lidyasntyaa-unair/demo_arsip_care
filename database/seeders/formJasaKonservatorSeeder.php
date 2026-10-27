<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class formJasaKonservatorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pengajuan_konservator')->insert([
            [
                'id_pengajuan' => 1,
                'jenis_dokumen' => 'pendidikan',
                'dimensi_fisik' => '21 x 29.7 cm',
                'tahun_dokumen' => 2010,
                'no_dokumen' => 'IJZ-2010-001',
                'narasi_kerusakan' => 'Kertas menguning dan sedikit robek.',
                'foto_tampak_depan' => 'foto/depan_1.jpg',
                'foto_tampak_belakang' => null,
                'foto_closeup_makro' => 'foto/detail_1.jpg',
                'metode_logistik' => 'mandiri',
                'biaya_logistik' => 0,
                'persetujuan_pemohon' => true,
                'tanggal_pengajuan' => '2026-10-20 09:00:00',
                'status_pengajuan' => 'menunggu_verifikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pengajuan' => 2,
                'jenis_dokumen' => 'kepemilikan',
                'dimensi_fisik' => '30 x 20 cm',
                'tahun_dokumen' => 1995,
                'no_dokumen' => 'SHM-1995-002',
                'narasi_kerusakan' => 'Dokumen mengalami noda air dan lipatan.',
                'foto_tampak_depan' => 'foto/depan_2.jpg',
                'foto_tampak_belakang' => 'foto/belakang_2.jpg',
                'foto_closeup_makro' => 'foto/detail_2.jpg',
                'metode_logistik' => 'brankas',
                'biaya_logistik' => 50000,
                'persetujuan_pemohon' => true,
                'tanggal_pengajuan' => '2026-10-21 10:30:00',
                'status_pengajuan' => 'ditinjau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
