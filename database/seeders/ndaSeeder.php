<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ndaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('nda')->insert([
            [
                'id' => 1,
                'id_user' => 1,
                'versi_nda' => 'v1.0',
                'persetujuan' => true,
                'tanggal_persetujuan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
