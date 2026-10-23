<?php
// Menangkap data dari form_jasa_konservator
$jenis_dokumen = isset($_POST['jenis_dokumen']) ? $_POST['jenis_dokumen'] : 'Sertifikat Tanah / HGB / SKT';
$tahun_dokumen = isset($_POST['tahun_dokumen']) && !empty($_POST['tahun_dokumen']) ? $_POST['tahun_dokumen'] : '1950';
$no_dokumen = isset($_POST['no_dokumen']) && !empty($_POST['no_dokumen']) ? $_POST['no_dokumen'] : '32.01.07.01.1.00214';
$rincian_kerusakan = isset($_POST['rincian_kerusakan']) && !empty($_POST['rincian_kerusakan']) ? $_POST['rincian_kerusakan'] : 'Kertas rapuh, berjamur, dan terdapat noda lipatan.';
$logistik = isset($_POST['logistik']) && $_POST['logistik'] == 'brankas' ? 50000 : 0;

// Logika Penentuan Diagnosis dan Biaya Berdasarkan Input Form
$tingkat_ph = "4.5 (Sangat Asam)";
$kelembapan = "58%";
$status_rekomendasi = "Dominan Restorasi Kertas";

// Penentuan Tindakan & Harga Berdasarkan Pilihan / Tahun
if ($tahun_dokumen < 1960) {
    $biaya_deasidifikasi = 75000;
    $biaya_mending = 65000;
    $biaya_enkapsulasi = 45000;
    $biaya_ultrasonic = 35000;
} else {
    $biaya_deasidifikasi = 60000;
    $biaya_mending = 50000;
    $biaya_enkapsulasi = 40000;
    $biaya_ultrasonic = 30000;
}

$subtotal_tindakan = $biaya_deasidifikasi + $biaya_mending + $biaya_enkapsulasi + $biaya_ultrasonic;
$total_investasi = $subtotal_tindakan + $logistik;

// Tautan Toko Shopee Arsip Care
$link_shopee = "https://shopee.co.id/arsipcare";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proposal Penanganan & Order Konservator - Arsip Care</title>
  <link rel="stylesheet" href="order_konservator.css">
  
  <style>
    /* STYLING KHUSUS CETAK PDF AGAR FULL A4 DAN TIDAK TERPOTONG */
    @media print {
      @page {
        size: A4 portrait;
        margin: 10mm;
      }

      body {
        background: #ffffff !important;
        color: #000000 !important;
        font-size: 10pt !important;
        margin: 0 !important;
        padding: 0 !important;
        -webkit-print-color-adjust: exact !important;
        print-color-adjust: exact !important;
      }

      /* Sembunyikan elemen non-dokumen saat mencetak */
      .navbar, 
      .footer, 
      .btn-print-pdf, 
      .btn-shopee, 
      .order-sidebar-right,
      .proposal-header-bar p {
        display: none !important;
      }

      .order-page-container {
        padding: 0 !important;
        margin: 0 !important;
        width: 100% !important;
        max-width: 100% !important;
      }

      .proposal-header-bar {
        border: none !important;
        padding: 0 0 8px 0 !important;
        margin-bottom: 8px !important;
      }

      .proposal-header-bar h2 {
        font-size: 13pt !important;
        color: #0B2240 !important;
      }

      .proposal-grid-layout {
        display: block !important;
        width: 100% !important;
      }

      .proposal-left-col {
        width: 100% !important;
      }

      .lab-header-box {
        padding: 8px 12px !important;
        background-color: #0F172A !important;
        color: #ffffff !important;
        border-radius: 6px !important;
      }

      .card-proposal-section {
        padding: 10px 12px !important;
        border: 1px solid #CBD5E1 !important;
        margin-bottom: 8px !important;
        page-break-inside: avoid !important;
      }

      .spec-info-grid {
        padding: 8px !important;
        margin-bottom: 8px !important;
        background: #F8FAFC !important;
      }

      .diagnostic-boxes-grid {
        gap: 6px !important;
      }

      .diag-card {
        padding: 6px 8px !important;
      }

      .plan-item {
        padding: 5px 8px !important;
        margin-bottom: 4px !important;
      }

      .proposal-footnote {
        padding: 6px 10px !important;
        font-size: 8.5pt !important;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar Utama -->
  <nav class="navbar">
    <div class="container navbar-container">
      <a href="../index/index.php" class="brand-logo">
        <img src="../index/logo arsipcare.jpg" alt="Logo Arsip Care" onerror="this.onerror=null; this.src='../logo arsipcare.jpg';">
        <div>
          <span class="brand-title">Arsip Care</span>
          <span class="brand-subtitle">Preservasi & Restorasi Arsip Konvensional</span>
        </div>
      </a>
      <div class="nav-links">
        <a href="../index/index.php">Beranda</a>
        <a href="../asesman/asesman.php">Konsultasi</a>
        <a href="../katalog/katalog.php">Katalog</a>
        <a href="../konsultasi_konservator/konsultasi_konservator.php" class="active">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Main Container Proposal & Order -->
  <main class="container order-page-container">
    
    <!-- Title Page & Bar Cetak PDF -->
    <div class="proposal-header-bar">
      <div>
        <h2>Proposal Penanganan & Rencana Restorasi Laboratorium</h2>
        <p>Dokumen legal penanganan fisik resmi berdasarkan standar akreditasi ANRI dan ISO 11799.</p>
      </div>
      <div class="header-action-buttons">
        <button type="button" class="btn-print-pdf" onclick="window.print()">
          📄 Unduh PDF Bersertifikat
        </button>
      </div>
    </div>

    <!-- Grid Layout Proposal & Order -->
    <div class="proposal-grid-layout">
      
      <!-- Kolom Kiri: Proposal Rinci Laboratorium -->
      <div class="proposal-left-col">
        
        <!-- Section 1: Header Laboratorium -->
        <div class="lab-header-box">
          <div class="lab-logo-title">
            <span class="lab-icon">🏛️</span>
            <div>
              <h3>LABORATORIUM PRESERVASI KEARSIPAN TERPADU</h3>
              <p>Fakultas Vokasi • Universitas Airlangga Surabaya</p>
            </div>
          </div>
          <span class="badge-accreditation">AKREDITASI ANRI NO. 048/RESTORASI-KERTAS</span>
        </div>

        <!-- Section 2: Spesifikasi Objek & Hasil Diagnostik Forensik -->
        <div class="card-proposal-section">
          <h4 class="section-title">🔍 Spesifikasi Objek & Hasil Diagnostik Forensik</h4>
          
          <div class="spec-info-grid">
            <div class="spec-item">
              <small>JENIS DOKUMEN & OBJEK</small>
              <strong><?php echo htmlspecialchars($jenis_dokumen); ?></strong>
              <span>No. ID: <?php echo htmlspecialchars($no_dokumen); ?></span>
            </div>
            <div class="spec-item">
              <small>IDENTIFIKASI FISIK UTAMA</small>
              <strong>Sertifikat / Berkas Fisik Kertas (Tahun <?php echo htmlspecialchars($tahun_dokumen); ?>)</strong>
              <span>Kondisi Rincian: <?php echo htmlspecialchars($rincian_kerusakan); ?></span>
            </div>
          </div>

          <!-- Indikator Diagnostik 3 Box -->
          <div class="diagnostic-boxes-grid">
            <div class="diag-card red-alert">
              <small>TINGKAT KEASAMAN (pH)</small>
              <strong>pH <?php echo $tingkat_ph; ?></strong>
              <span>Kertas terdegradasi asam tinggi, berisiko rapuh total.</span>
            </div>
            <div class="diag-card orange-alert">
              <small>KELEMBAPAN SERAT (EMC)</small>
              <strong><?php echo $kelembapan; ?> (Sangat Tinggi)</strong>
              <span>Gumpalan spora jamur aktif berkembang biak.</span>
            </div>
            <div class="diag-card green-info">
              <small>REKOMENDASI KURATOR</small>
              <strong><?php echo $status_rekomendasi; ?></strong>
              <span>Tindakan deasidifikasi basah & penguatan serat.</span>
            </div>
          </div>
        </div>

        <!-- Section 3: Rencana Tindakan Klinis Berstandar ALA/ICA -->
        <div class="card-proposal-section">
          <h4 class="section-title">⚙️ Rencana Tindakan Klinis Berstandar ALA/ICA</h4>
          
          <div class="action-plan-list">
            <div class="plan-item">
              <div class="plan-desc">
                <strong>1. Uji Keasaman pH & Spektroskopi Serat Mikro</strong>
                <p>Pengujian non-destruktif keasaman kertas awal & identifikasi jenis tinta.</p>
              </div>
              <span class="plan-price free">Termasuk (Free)</span>
            </div>

            <div class="plan-item">
              <div class="plan-desc">
                <strong>2. Pencucian Kering Noda & Deasidifikasi Kalsium / Magnesium</strong>
                <p>Pembersihan endapan jamur/debu serta penetralan asam dengan larutan standar museum.</p>
              </div>
              <span class="plan-price">Rp <?php echo number_format($biaya_deasidifikasi, 0, ',', '.'); ?></span>
            </div>

            <div class="plan-item">
              <div class="plan-desc">
                <strong>3. Mending Serat Kertas Tisu Jepang Tengujo (Tengujo 9gsm) & Lamination</strong>
                <p>Penguatan bagian kertas yang robek/berlubang menggunakan perekat sintetis perekat kanji/CMC.</p>
              </div>
              <span class="plan-price">Rp <?php echo number_format($biaya_mending, 0, ',', '.'); ?></span>
            </div>

            <div class="plan-item">
              <div class="plan-desc">
                <strong>4. Enkapsulasi Poliester Mylar Inert 75 Mikron Ultrasonik</strong>
                <p>Pelapisan ganda dengan Mylar bebas asam tanpa menggunakan lem langsung pada kertas.</p>
              </div>
              <span class="plan-price">Rp <?php echo number_format($biaya_enkapsulasi, 0, ',', '.'); ?></span>
            </div>

            <div class="plan-item">
              <div class="plan-desc">
                <strong>5. Pembersihan Ultrasonik & Fumigasi Vakum Spora Jamur</strong>
                <p>Sterilisasi spora mikroskopis dan pengerjaan vakum kering bebas jamur.</p>
              </div>
              <span class="plan-price">Rp <?php echo number_format($biaya_ultrasonic, 0, ',', '.'); ?></span>
            </div>

            <div class="plan-item highlight-free">
              <div class="plan-desc">
                <strong>6. Sertifikat Garansi Preservasi 5 Tahun & Berita Acara (BAST)</strong>
                <p>Dokumen hukum penjamin keaslian dan jaminan preservasi arsip berharga.</p>
              </div>
              <span class="plan-price free">Gratis / Termasuk</span>
            </div>
          </div>
        </div>

        <!-- Footnote Estimasi Pengerjaan -->
        <div class="proposal-footnote">
          ⏱️ <strong>Estimasi Waktu Pengerjaan:</strong> 5 Hari Kerja Efektif sejak dokumen diterima di laboratorium.
        </div>

      </div>

      <!-- Kolom Kanan: Rincian Investasi & Pembayaran via Shopee -->
      <div class="order-sidebar-right">
        
        <div class="payment-card">
          <small class="card-subtitle">RINCIAN INVESTASI</small>
          <h3>Penawaran Biaya Restorasi</h3>

          <div class="price-breakdown-list">
            <div class="breakdown-row">
              <span>Subtotal Tindakan Lab</span>
              <strong>Rp <?php echo number_format($subtotal_tindakan, 0, ',', '.'); ?></strong>
            </div>
            <div class="breakdown-row">
              <span>Layanan Logistik & Proteksi</span>
              <strong>Rp <?php echo number_format($logistik, 0, ',', '.'); ?></strong>
            </div>
            <hr class="divider-line">
            <div class="breakdown-row total-row">
              <span>Total Investasi</span>
              <strong class="total-price">Rp <?php echo number_format($total_investasi, 0, ',', '.'); ?></strong>
            </div>
          </div>

          <div class="shopee-guarantee-box">
            <strong>🛍️ Shopee Garansi 100% Safe</strong>
            <p>Transaksi aman via Shopee. Dana Anda baru ditransfer ke laboratorium setelah dokumen restorasi Anda terima dengan selamat.</p>
          </div>

          <a href="<?php echo $link_shopee; ?>" target="_blank" class="btn-shopee">
            🛒 Lanjut Pembayaran via Shopee &rarr;
          </a>

          <div class="payment-footer-notes">
            <span>🔒 Enkripsi SSL 256-bit</span>
            <span>🏛️ Resmi UNAIR</span>
          </div>
        </div>

      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <strong style="font-size: 1rem; color: #0B2240; display: block; margin-bottom: 0.5rem;">Arsip Care</strong>
        <p style="color: #64748B; font-size: 0.75rem; line-height: 1.6;">Platform pertolongan pertama dan restorasi dokumen berharga berbasis sertifikasi kearsipan nasional.</p>
        <span style="display: block; margin-top: 1rem; font-size: 0.7rem; color: #94A3B8;">© 2026 Arsip Care. All rights reserved.</span>
      </div>
      <div>
        <h4 style="font-size: 0.85rem; color: #0B2240; margin-bottom: 0.5rem;">Layanan Utama</h4>
        <ul style="list-style: none; font-size: 0.75rem; color: #64748B; display: flex; flex-direction: column; gap: 0.35rem;">
          <li>✓ Asesmen Kerusakan Chatbot</li>
          <li>✓ Penjualan DIY Kit Standar Arsip</li>
          <li>✓ Konservasi Laboratorium</li>
        </ul>
      </div>
      <div>
        <h4 style="font-size: 0.85rem; color: #0B2240; margin-bottom: 0.5rem;">Keamanan</h4>
        <ul style="list-style: none; font-size: 0.75rem; color: #64748B; display: flex; flex-direction: column; gap: 0.35rem;">
          <li>🔒 Enkripsi 256-bit SSL</li>
          <li>⚖️ Standar ISO 11799</li>
        </ul>
      </div>
      <div>
        <h4 style="font-size: 0.85rem; color: #0B2240; margin-bottom: 0.5rem;">Kontak</h4>
        <ul style="list-style: none; font-size: 0.75rem; color: #64748B; display: flex; flex-direction: column; gap: 0.35rem;">
          <li>📞 WhatsApp 0857-181-92720</li>
          <li>✉️ arsipcare.id@gmail.com</li>
        </ul>
      </div>
    </div>
  </footer>

</body>
</html>