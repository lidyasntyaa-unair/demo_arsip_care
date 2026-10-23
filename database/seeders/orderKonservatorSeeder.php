<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrdersKonservatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('orders_konservator')->insert([
            [
                'jenis_dokumen' => 'Sertifikat Tanah / Ijazah Lawas',
                'tahundokumen' => 1978,
                'no_dokumen' => 'AC-SRT/1978/001',
                'rinciankerusakan' => 'Kertas menguning (foxing), terdapat lipatan rapuh dan sedikit jamur.',
                'pilihan_logistik' => 'ArsipCare Courier (Pickup Direct)',
                'biayalogistik' => 35000.00,
                'tingkat_ph' => '4.8 (Asam Tinggi)',
                'kelembapan' => '68%',
                'status_rekomendasi' => 'ArsipCare Standard Care (Deasidifikasi & Mending)',
                'biaya_deasidifikasi' => 150000.00,
                'biayamending' => 100000.00,
                'biaya_enkapsulasi' => 0.00,
                'biayaultrasonic' => 0.00,
                'subtotal_tindakan' => 250000.00,
                'totalinvestasi' => 285000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'jenis_dokumen' => 'Peta Topografi & Cetak Biru (Blueprint)',
                'tahundokumen' => 1950,
                'no_dokumen' => 'AC-MAP/1950/042',
                'rinciankerusakan' => 'Kertas rapuh, tepi bergelombang, tinta mulai pudar akibat kelembapan.',
                'pilihan_logistik' => 'Ekspedisi Partner (JNE Trucking)',
                'biayalogistik' => 50000.00,
                'tingkat_ph' => '5.2 (Asam Sedang)',
                'kelembapan' => '72%',
                'status_rekomendasi' => 'ArsipCare Protection (Enkapsulasi & Cleaning)',
                'biaya_deasidifikasi' => 100000.00,
                'biayamending' => 75000.00,
                'biaya_enkapsulasi' => 175000.00,
                'biayaultrasonic' => 100000.00,
                'subtotal_tindakan' => 450000.00,
                'totalinvestasi' => 500000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'jenis_dokumen' => 'Naskah Kuno / Kitab Bersejarah',
                'tahundokumen' => 1925,
                'no_dokumen' => 'AC-NSK/1925/009',
                'rinciankerusakan' => 'Sebagian kertas dimakan ngengat/serangga, struktur serat rapuh, asam tinggi.',
                'pilihan_logistik' => 'ArsipCare Premium Safe Delivery',
                'biayalogistik' => 75000.00,
                'tingkat_ph' => '3.9 (Sangat Asam)',
                'kelembapan' => '60%',
                'status_rekomendasi' => 'ArsipCare Total Restoration (Restorasi Konservator Full)',
                'biaya_deasidifikasi' => 250000.00,
                'biayamending' => 200000.00,
                'biaya_enkapsulasi' => 200000.00,
                'biayaultrasonic' => 150000.00,
                'subtotal_tindakan' => 800000.00,
                'totalinvestasi' => 875000.00,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
