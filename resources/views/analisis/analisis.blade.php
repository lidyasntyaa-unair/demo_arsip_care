<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisis Kondisi Dokumen - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/analisis.css') }}">
</head>
<body>

  <!-- Navbar Seragam -->
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

  <!-- Input File Tersembunyi untuk Ganti File -->
  <input type="file" id="changeFileInput" accept="image/*,.pdf" style="display: none;" onchange="handleFileChange(event)">

  <main class="container" style="padding: 3rem 1.5rem; min-height: 70vh;">
    <div style="max-width: 800px; margin: 0 auto;">

      <!-- Card Status Dokumen Terpilih -->
      <div class="file-status-card">
        <div class="file-info-left">
          <span class="raw-badge">RAW</span>
          <div>
            <div style="display: flex; align-items: center; gap: 0.35rem;">
              <strong id="fileNameDisplay" style="font-size: 0.9rem; color: var(--primary-dark);">Ijazah_SMA_1998_Basah.jpg</strong>
              <span style="color: var(--teal-accent); font-weight: 800;">✓</span>
            </div>
            <span id="fileSizeDisplay" style="font-size: 0.725rem; color: var(--slate-600);">2.4 MB • Status: Siap Dianalisis Algoritma</span>
          </div>
        </div>

        <!-- Tombol Ganti File -->
        <button type="button" class="btn-change-file" onclick="document.getElementById('changeFileInput').click();">
          Ganti File
        </button>
      </div>

      <!-- Tombol Mulai Analisis -->
      <a href="{{ url('/proses-analisis') }}" class="btn-submit-main" style="margin-top: 1.5rem;">
        Analisis Kondisi Dokumen Sekarang &rarr;
      </a>

    </div>
  </main>

  <script src="{{ asset('js/analisis.js') }}"></script>
</body>
</html>
