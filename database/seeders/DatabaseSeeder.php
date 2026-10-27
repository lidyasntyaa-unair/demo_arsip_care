<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            analisisSeeder::class,
            asesmenSeeder::class,
            formJasaKonservatorSeeder::class,
            hasilDiagnosaSeeder::class,
            hasilKonsultasiKonservatorSeeder::class,
            indexSeeder::class,
            konsultasiKonservatorSeeder::class,
            ndaSeeder::class,
            orderKonservatorSeeder::class,
            DossierAnalisisSeeder::class, // Sisakan ini saja, hapus prosesAnalisisSeeder::class
            katalogSeeder::class,
        ]);
    }
}
