<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_konservator', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->enum('jenis_dokumen', [
                'pendidikan',
                'kependudukan',
                'kepemilikan',
                'pernikahan',
                'legalitas',
                'naskah_kuno',
            ]);
            $table->string('dimensi_fisik', 50);
            $table->year('tahun_dokumen');
            $table->string('no_dokumen', 100)->nullable();
            $table->text('narasi_kerusakan');
            $table->string('foto_tampak_depan', 255)->nullable();
            $table->string('foto_tampak_belakang', 255)->nullable();
            $table->string('foto_closeup_makro', 255)->nullable();
            $table->enum('metode_logistik', ['brankas', 'mandiri'])->default('mandiri');
            $table->decimal('biaya_logistik', 12, 2)->default(0);
            $table->boolean('persetujuan_pemohon')->default(false);
            $table->dateTime('tanggal_pengajuan')->useCurrent();
            $table->string('status_pengajuan', 30)->default('menunggu_verifikasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_konservator');
    }
};
