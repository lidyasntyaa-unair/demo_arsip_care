<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asesmen', function (Blueprint $table) {
            $table->id();
            $table->string('foto', 255)->nullable();
            $table->json('gejala_kerusakan_fisik');
            $table->enum('jenis_dokumen', [
                'pendidikan_akademik',
                'kependudukan',
                'kepemilikan_aset',
                'pernikahan_keluarga',
                'legalitas_keuangan',
                'naskah_arsip_kuno',
            ]);
            $table->year('tahun')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asesmen');
    }
};
