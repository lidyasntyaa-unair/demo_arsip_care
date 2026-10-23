<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisis Kondisi Dokumen - Arsip Care</title>
  <link rel="stylesheet" href="analisis.css">
</head>
<body>

  <!-- Navbar Seragam -->
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
        <a href="../asesman/asesman.php" class="active">Konsultasi</a>
        <a href="../katalog/katalog.php">Katalog</a>
        <a href="../konsultasi_konservator/konsultasi_konservator.php">Jasa Konservator</a>
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
              <strong id="fileNameDisplay" style="font-size: 0.9rem; color: #0B2240;">Ijazah_SMA_1998_Basah.jpg</strong>
              <span style="color: #34AC98; font-weight: 800;">✓</span>
            </div>
            <span id="fileSizeDisplay" style="font-size: 0.725rem; color: #64748B;">2.4 MB • Status: Siap Dianalisis Algoritma</span>
          </div>
        </div>

        <!-- Tombol Ganti File (Buka File Explorer Langsung) -->
        <button type="button" class="btn-change-file" onclick="document.getElementById('changeFileInput').click();">
          Ganti File
        </button>
      </div>

      <!-- Tombol Mulai Analisis -->
      <a href="../proses_analisis/proses_analisis.php" class="btn-submit-main" style="margin-top: 1.5rem;">
        Analisis Kondisi Dokumen Sekarang &rarr;
      </a>

    </div>
  </main>

  <script>
    // Tampilkan nama file dari localStorage jika ada
    window.onload = function() {
      const savedName = localStorage.getItem('uploadedFileName');
      const savedSize = localStorage.getItem('uploadedFileSize');
      if (savedName) {
        document.getElementById('fileNameDisplay').innerText = savedName;
      }
      if (savedSize) {
        document.getElementById('fileSizeDisplay').innerText = savedSize + ' • Status: Siap Dianalisis Algoritma';
      }
    };

    // Fungsi Ganti File (Buka File Explorer & Tetap di Halaman Ini)
    function handleFileChange(event) {
      const file = event.target.files[0];
      if (file) {
        const sizeMb = (file.size / (1024 * 1024)).toFixed(1) + ' MB';
        document.getElementById('fileNameDisplay').innerText = file.name;
        document.getElementById('fileSizeDisplay').innerText = sizeMb + ' • Status: Siap Dianalisis Algoritma';
        
        localStorage.setItem('uploadedFileName', file.name);
        localStorage.setItem('uploadedFileSize', sizeMb);
      }
    }
  </script>

</body>
</html>