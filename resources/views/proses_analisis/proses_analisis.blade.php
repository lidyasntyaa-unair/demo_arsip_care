<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memproses Analisis Kerusakan Dokumen... - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/proses_analisis.css') }}">
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
        <a href="{{ url('/konservator') }}">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container" style="padding: 2.5rem 1.5rem;">

    <div style="text-align: center; max-width: 600px; margin: 0 auto;">
      <h2 style="font-size: 1.5rem; font-weight: 800; color: var(--primary-dark);">Memproses Analisis Kerusakan Dokumen...</h2>
      <p style="font-size: 0.8rem; color: var(--slate-600); margin-top: 0.35rem;">Algoritma spektrometri visual kami sedang memetakan degradasi lignin, asam, dan kelembapan berkas secara presisi.</p>
    </div>

    <!-- Processing Card -->
    <div class="scan-card">
      <div class="scan-header">
        <span style="font-weight: 800; color: var(--primary-dark);" id="dossierTitle">📁 Dossier Pemeriksaan: #ARS-2026-8819</span>
        <span style="color: var(--teal-accent); font-weight: 700; background: var(--teal-light); padding: 0.25rem 0.5rem; border-radius: 0.35rem;">● ISO-11799 Terkalibrasi</span>
      </div>

      <!-- Bingkai Pemindaian Dinamis -->
      <div class="scan-img-container">
        <!-- Laser Pindaian Berjalan -->
        <div class="scan-line"></div>

        <!-- Element Gambar Pengguna -->
        <img id="scannedDocumentImage" src="" alt="Pemindaian Dokumen">
      </div>

      <!-- Bar Progres & Status Realtime -->
      <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1.25rem; font-size: 0.775rem;">
        <strong style="color: var(--primary-dark);" id="progressText">0% — Menganalisis Degradasi Selulosa...</strong>
        <span style="color: var(--slate-600);" id="etaText">ETA: ~4 Detik</span>
      </div>

      <div class="progress-bar-bg">
        <div id="progressBar" class="progress-bar-fill"></div>
      </div>

      <!-- Checklist Tahapan Analisis Alami -->
      <ul class="status-list">
        <li id="step1" style="color: var(--slate-400);">⚪ Selesai: Dekompilasi berkas resolusi tinggi & verifikasi tanda tangan digital.</li>
        <li id="step2" style="color: var(--slate-400);">⚪ Selesai: Mendeteksi tingkat kerapuhan serat kertas dan diskolorasi pigmentasi.</li>
        <li id="step3" style="color: var(--slate-400);">⚪ Sedang Berjalan: Pencocokan ke basis data SOP restorasi ANRI & UGM...</li>
      </ul>
    </div>

    <p style="text-align: center; font-size: 0.7rem; color: var(--slate-400); margin-top: 1rem;">
      ⚡ Spektrometer & Kalibrasi Lab &nbsp;|&nbsp; 🛡️ Sesuai Regulasi UU Kearsipan
    </p>

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

  <script src="{{ asset('js/proses_analisis.js') }}"></script>
</body>
</html>
