<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('analisis_dokumen', function (Blueprint $table) {
            $table->id('id_analisis');
            $table->string('nama_file');
            $table->string('path_file')->nullable();
            $table->decimal('ukuran_file_mb', 8, 2);
            $table->string('tipe_file', 50);
            $table->enum('status_analisis', ['siap_dianalisis', 'proses', 'selesai'])->default('siap_dianalisis');
            $table->text('hasil_analisis')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('analisis_dokumen');
    }
};
