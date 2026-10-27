<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan_medis_arsip', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->string('registrasi_berkas', 100);
            $table->decimal('estimasi_derajat_asam', 3, 1);
            $table->integer('indeks_kerapuhan_serat');
            $table->string('status_infeksi_biologis', 50);
            $table->text('rekomendasi_prosedur_kuratif');
            $table->enum('pilihan_langkah_pemulihan', ['DIY', 'Profesional']);
            $table->text('rekomendasi_solusi_diy_mandiri');
            $table->text('solusi_profesional');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_medis_arsip');
    }
};
