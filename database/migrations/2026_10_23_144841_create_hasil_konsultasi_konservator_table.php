<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat_konsultasi', function (Blueprint $table) {
            $table->id('id_riwayat');
            $table->unsignedBigInteger('id_user');
            $table->string('judul_obrolan', 255);
            $table->enum('status_obrolan', ['Aktif', 'Arsip'])->default('Aktif');
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('kartu_rekomendasi', function (Blueprint $table) {
            $table->id('id_rekomendasi');
            $table->string('judul_layanan', 255);
            $table->text('deskripsi_layanan');
            $table->string('estimasi_waktu', 150);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kartu_rekomendasi');
        Schema::dropIfExists('riwayat_konsultasi');
    }
};
