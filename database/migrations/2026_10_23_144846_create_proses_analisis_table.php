<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dossier_analisis', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_dossier', 50)->unique();
            $table->string('nama_file');
            $table->text('path_gambar');
            $table->enum('status_analisis', ['pending', 'processing', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dossier_analisis');
    }
};
