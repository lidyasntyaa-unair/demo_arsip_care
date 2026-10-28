<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Diagnosa Dokumen - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/hasil_diagnosa.css') }}">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container navbar-container">
      <a href="{{ url('/') }}" class="brand-logo">
        <img src="{{ asset('images/logo arsipcare.jpg') }}" alt="Logo Arsip Care">
        <div>
          <span class="brand-title">Arsip Care</span>
          <span class="brand-subtitle">Preservasi & Restorasi Arsip Konvensional</span>
        </div>
      </a>
      <div class="nav-links">
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/asesmen') }}" class="active">Konsultasi</a>
        <a href="{{ url('/katalog') }}">Katalog</a>
        <a href="{{ url('/konsultasi-konservator') }}">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container" style="padding: 2rem 1.5rem;">

    <!-- Header Ringkasan Medis Dokumen -->
    <div class="report-header-card">
      <span class="report-badge">LAPORAN MEDIS ARSIP VITAL</span>
      <h1 class="report-title" id="docReportTitle">Hasil Diagnosa Dokumen: Loading...</h1>
      <p class="report-subtitle">
        Registrasi Berkas: <strong style="color: var(--primary-dark);" id="regNumber">ARC-DOC-2026-8021</strong> &nbsp;|&nbsp;
        Pemeriksaan: <span id="docCategoryDisplay" style="color: var(--primary-dark); font-weight: 600;">Kategori Arsip Resmi Negara</span>
      </p>
    </div>

    <!-- Grid Indikator Diagnosis Utama -->
    <div class="diagnosis-grid">

      <div class="indicator-card">
        <span class="indicator-label">Estimasi Derajat Asam</span>
        <strong class="indicator-value" style="color: var(--danger);" id="phValue">pH 4.8</strong>
        <span class="indicator-badge" style="color: #DC2626; background: var(--danger-light);" id="phBadge">Asam Tinggi (Lignin Degradasi)</span>
      </div>

      <div class="indicator-card">
        <span class="indicator-label">Indeks Kerapuhan Serat</span>
        <strong class="indicator-value" style="color: var(--warning);" id="fragilityValue">58%</strong>
        <span class="indicator-badge" style="color: #D97706; background: var(--warning-light);" id="fragilityBadge">Rentan Pecah / Sobek</span>
      </div>

      <div class="indicator-card">
        <span class="indicator-label">Infeksi Biologis / Jamur</span>
        <strong class="indicator-value" style="color: var(--success);" id="fungusValue">Dormant</strong>
        <span class="indicator-badge" style="color: #059669; background: var(--success-light);" id="fungusBadge">Spora Non-Aktif</span>
      </div>

      <div class="indicator-card">
        <span class="indicator-label">Prosedur Kuratif Utama</span>
        <strong style="font-size: 1.1rem; color: var(--primary-dark); font-weight: 800; display: block; margin-top: 0.25rem;" id="curativeProcedure">Deasidifikasi + Mending</strong>
        <span style="font-size: 0.7refm; color: var(--teal-accent); font-weight: 700;">Standar ISO 11799 Kearsipan</span>
      </div>

    </div>

    <!-- Pilihan Langkah Pemulihan Dokumen dengan Rekomendasi Link Produk Shopee Dinamis -->
    <h2 class="section-heading">Pilih Langkah Pemulihan Dokumen</h2>

    <div class="recovery-grid">

      <!-- Solusi Mandiri (DIY) - Tautkan Langsung ke Produk Shopee Terkait -->
      <div class="solution-card-diy">
        <div>
          <span class="badge-diy">SOLUSI MANDIRI (DIY)</span>
          <h3 style="font-size: 1rem; font-weight: 800; color: var(--primary-dark); margin-top: 0.5rem;">Tangani dengan DIY Repair Kit Standar Kearsipan</h3>
          <p style="font-size: 0.75rem; color: var(--slate-600); margin-top: 0.35rem; line-height: 1.5;">Rekomendasi paket perlengkapan restorasi mandiri terkalibrasi khusus sesuai indikasi kerusakan fisik dokumen Anda.</p>

          <div class="product-box">
            <strong style="font-size: 0.875rem; color: var(--primary-dark); display: block;" id="diyKitName">DIY Repair-kit Penambalan Standar</strong>
            <span style="font-size: 0.7rem; color: var(--slate-600);" id="diyKitDesc">Kertas Tisu Jepang + Lem Metil Selulosa + Mylar Enclosure</span>
            <div class="product-price" id="diyKitPrice">Rp 85.000</div>
          </div>
        </div>

        <a id="btnBuyDiyShopee" href="https://shopee.co.id/shop/1932803940" target="_blank" class="btn-action-primary">
          🛒 Beli Paket DIY Kit di Shopee &rarr;
        </a>
      </div>

      <!-- Solusi Profesional (Lab Conservator) -->
      <div class="solution-card-lab">
        <div>
          <span class="badge-lab">SOLUSI PROFESIONAL (LAB CERTIFIED)</span>
          <h3 style="font-size: 1rem; font-weight: 800; color: var(--white); margin-top: 0.5rem;">Layanan Kurasi & Restorasi Konservator Presisi</h3>
          <p style="font-size: 0.75rem; color: var(--slate-400); margin-top: 0.35rem; line-height: 1.5;">Solusi bebas risiko untuk dokumen bernilai legalitas tinggi (Ijazah asli, SHM, Akta) yang memerlukan perlakuan kimiawi khusus oleh tim ahli.</p>

          <ul class="lab-features-list">
            <li>🔒 Enkripsi End-to-End 256-bit & Chain of Custody</li>
            <li>🏛️ Ditangani Konservator Sertifikasi ANRI & UGM</li>
            <li>📜 Garansi Preservasi 25 Tahun & Berita Acara Legal</li>
          </ul>
        </div>

        <a href="{{ url('/konsultasi-konservator') }}" class="btn-action-primary">
          💼 Pesan Jasa Konservator Sekarang &rarr;
        </a>
      </div>

    </div>

  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <strong style="font-size: 1rem; color: var(--primary-dark); display: block; margin-bottom: 0.5rem;">Arsip Care</strong>
        <p style="color: var(--slate-600); font-size: 0.75rem; line-height: 1.6;">Platform pertolongan pertama dan restorasi dokumen berharga berbasis sertifikasi kearsipan nasional.</p>
        <span style="display: block; margin-top: 1rem; font-size: 0.7rem; color: var(--slate-400);">© 2026 Arsip Care. All rights reserved.</span>
      </div>
      <div>
        <h4 style="font-size: 0.85rem; color: var(--primary-dark); margin-bottom: 0.5rem;">Layanan Utama</h4>
        <ul style="list-style: none; font-size: 0.75rem; color: var(--slate-600); display: flex; flex-direction: column; gap: 0.35rem;">
          <li>✓ Asesmen Kerusakan Chatbot</li>
          <li>✓ Penjualan DIY Kit Standar Arsip</li>
          <li>✓ Konservasi Laboratorium</li>
        </ul>
      </div>
      <div>
        <h4 style="font-size: 0.85rem; color: var(--primary-dark); margin-bottom: 0.5rem;">Keamanan</h4>
        <ul style="list-style: none; font-size: 0.75rem; color: var(--slate-600); display: flex; flex-direction: column; gap: 0.35rem;">
          <li>🔒 Enkripsi 256-bit SSL</li>
          <li>⚖️ Standar ISO 11799</li>
        </ul>
      </div>
      <div>
        <h4 style="font-size: 0.85rem; color: var(--primary-dark); margin-bottom: 0.5rem;">Kontak</h4>
        <ul style="list-style: none; font-size: 0.75rem; color: var(--slate-600); display: flex; flex-direction: column; gap: 0.35rem;">
          <li>📞 WhatsApp 0857-181-92720</li>
          <li>✉️ arsipcare.id@gmail.com</li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/hasil_diagnosa.js') }}"></script>
</body>
</html>
