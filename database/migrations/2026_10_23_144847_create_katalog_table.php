<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('katalog', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk', 255);
            $table->decimal('harga', 12, 2);
            $table->string('gambar', 255);
            $table->string('link_shopee', 255);
            $table->string('badge', 50)->default('STANDAR ARSIP');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('katalog');
    }
};
