<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. View Master Rekapitulasi Layanan & Restorasi Dokumen
        DB::statement("
            CREATE OR REPLACE VIEW view_master_layanan AS
            SELECT
                pk.id_pengajuan,
                pk.no_dokumen,
                pk.jenis_dokumen,
                pk.dimensi_fisik,
                pk.tahun_dokumen,
                pk.narasi_kerusakan,
                pk.metode_logistik,
                pk.biaya_logistik,
                pk.status_pengajuan,
                pk.tanggal_pengajuan,

                -- Data Rincian Order & Biaya Tindakan
                ok.id AS id_order,
                ok.tingkat_ph,
                ok.kelembapan,
                ok.status_rekomendasi,
                ok.biaya_deasidifikasi,
                ok.biaya_mending,
                ok.biaya_enkapsulasi,
                ok.biaya_ultrasonic,
                ok.subtotal_tindakan,
                ok.total_investasi,

                -- Data Diagnosa Medis & Kerapuhan Serat
                lma.id_laporan,
                lma.registrasi_berkas,
                lma.estimasi_derajat_asam,
                lma.indeks_kerapuhan_serat,
                lma.status_infeksi_biologis,
                lma.pilihan_langkah_pemulihan,
                lma.rekomendasi_prosedur_kuratif

            FROM pengajuan_konservator pk
            LEFT JOIN orders_konservator ok ON pk.no_dokumen = ok.no_dokumen
            LEFT JOIN laporan_medis_arsip lma ON pk.no_dokumen = lma.registrasi_berkas
        ");

        // 2. View Master Aktivitas Konsultasi & Pengguna (User)
        DB::statement("
            CREATE OR REPLACE VIEW view_master_konsultasi AS
            SELECT
                rk.id_riwayat,
                u.id AS user_id,
                u.username,
                u.email,
                u.no_telepon,
                u.role,
                rk.judul_obrolan,
                rk.status_obrolan,
                n.versi_nda,
                n.persetujuan AS status_nda,
                n.tanggal_persetujuan AS tanggal_nda,
                rk.created_at AS tanggal_konsultasi
            FROM riwayat_konsultasi rk
            INNER JOIN users u ON rk.id_user = u.id
            LEFT JOIN nda n ON u.id = n.id_user
        ");
    }

    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS view_master_layanan");
        DB::statement("DROP VIEW IF EXISTS view_master_konsultasi");
    }
};
