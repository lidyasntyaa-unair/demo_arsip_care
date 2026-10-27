<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class orderKonservatorSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('orders_konservator')->insert([
            [
                'jenis_dokumen' => 'Sertifikat Tanah / Ijazah Lawas',
                'tahun_dokumen' => 1978,
                'no_dokumen' => 'AC-SRT/1978/001',
                'rincian_kerusakan' => 'Kertas menguning (foxing), terdapat lipatan rapuh.',
                'pilihan_logistik' => 'ArsipCare Courier (Pickup Direct)',
                'biaya_logistik' => 35000.00,
                'tingkat_ph' => '4.8 (Asam Tinggi)',
                'kelembapan' => '68%',
                'status_rekomendasi' => 'ArsipCare Standard Care',
                'biaya_deasidifikasi' => 150000.00,
                'biaya_mending' => 100000.00,
                'biaya_enkapsulasi' => 0.00,
                'biaya_ultrasonic' => 0.00,
                'subtotal_tindakan' => 250000.00,
                'total_investasi' => 285000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
