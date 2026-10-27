<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders_konservator', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_dokumen', 100);
            $table->integer('tahun_dokumen');
            $table->string('no_dokumen', 100);
            $table->text('rincian_kerusakan')->nullable();
            $table->string('pilihan_logistik', 50)->nullable();
            $table->decimal('biaya_logistik', 12, 2)->default(0);
            $table->string('tingkat_ph', 50)->nullable();
            $table->string('kelembapan', 20)->nullable();
            $table->string('status_rekomendasi', 100)->nullable();
            $table->decimal('biaya_deasidifikasi', 12, 2)->default(0);
            $table->decimal('biaya_mending', 12, 2)->default(0);
            $table->decimal('biaya_enkapsulasi', 12, 2)->default(0);
            $table->decimal('biaya_ultrasonic', 12, 2)->default(0);
            $table->decimal('subtotal_tindakan', 12, 2)->default(0);
            $table->decimal('total_investasi', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders_konservator');
    }
};
