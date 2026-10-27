<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class indexSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('index')->insert([
            ['id' => 1, 'nama_menu' => 'Beranda', 'slug' => 'beranda', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'nama_menu' => 'Layanan Konservasi', 'slug' => 'layanan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
