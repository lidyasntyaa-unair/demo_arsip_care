<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konsultasi_konservator', function (Blueprint $table) {
            $table->id('id_konsultasi');
            $table->text('pertanyaan');
            $table->text('jawaban')->nullable();
            $table->string('nama_file', 255)->nullable();
            $table->string('path_file', 255)->nullable();
            $table->string('tipe_file', 50)->nullable();
            $table->integer('ukuran_file')->nullable();
            $table->string('status_konsultasi', 30)->default('menunggu_jawaban');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konsultasi_konservator');
    }
};
