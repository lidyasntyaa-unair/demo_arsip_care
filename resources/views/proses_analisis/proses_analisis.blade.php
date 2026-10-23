<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Memproses Analisis Kerusakan Dokumen... - Arsip Care</title>
  <link rel="stylesheet" href="proses_analisis.css">
</head>
<body>

  <!-- Navbar -->
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

  <!-- Main Content -->
  <main class="container" style="padding: 2.5rem 1.5rem;">
    
    <div style="text-align: center; max-width: 600px; margin: 0 auto;">
      <h2 style="font-size: 1.5rem; font-weight: 800; color: #0B2240;">Memproses Analisis Kerusakan Dokumen...</h2>
      <p style="font-size: 0.8rem; color: #64748B; margin-top: 0.35rem;">Algoritma spektrometri visual kami sedang memetakan degradasi lignin, asam, dan kelembapan berkas secara presisi.</p>
    </div>

    <!-- Processing Card -->
    <div class="scan-card">
      <div class="scan-header">
        <span style="font-weight: 800; color: #0B2240;" id="dossierTitle">📁 Dossier Pemeriksaan: #ARS-2026-8819</span>
        <span style="color: #34AC98; font-weight: 700; background: #E6F7F4; padding: 0.25rem 0.5rem; border-radius: 0.35rem;">● ISO-11799 Terkalibrasi</span>
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
        <strong style="color: #0B2240;" id="progressText">0% — Menganalisis Degradasi Selulosa...</strong>
        <span style="color: #64748B;" id="etaText">ETA: ~4 Detik</span>
      </div>

      <div class="progress-bar-bg">
        <div id="progressBar" class="progress-bar-fill"></div>
      </div>

      <!-- Checklist Tahapan Analisis Alami -->
      <ul class="status-list">
        <li id="step1" style="color: #94A3B8;">⚪ Selesai: Dekompilasi berkas resolusi tinggi & verifikasi tanda tangan digital.</li>
        <li id="step2" style="color: #94A3B8;">⚪ Selesai: Mendeteksi tingkat kerapuhan serat kertas dan diskolorasi pigmentasi.</li>
        <li id="step3" style="color: #94A3B8;">⚪ Sedang Berjalan: Pencocokan ke basis data SOP restorasi ANRI & UGM...</li>
      </ul>
    </div>

    <p style="text-align: center; font-size: 0.7rem; color: #94A3B8; margin-top: 1rem;">
      ⚡ Spektrometer & Kalibrasi Lab &nbsp;|&nbsp; 🛡️ Sesuai Regulasi UU Kearsipan
    </p>

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

  <!-- Script Penanganan Pemindaian Dinamis -->
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const imgElement = document.getElementById('scannedDocumentImage');
      const dossierTitle = document.getElementById('dossierTitle');

      // Ambil file spesimen gambar yang diunggah dari localStorage
      const userImage = localStorage.getItem('uploadedImageSrc');
      const userFileName = localStorage.getItem('uploadedFileName');

      if (userImage && userImage.trim() !== "") {
        imgElement.src = userImage;
      } else {
        // Fallback default jika diakses tanpa upload
        imgElement.src = 'foto 1 hal 4.png';
      }

      if (userFileName) {
        dossierTitle.innerText = '📁 Dossier Pemeriksaan: ' + userFileName;
      }
    });

    // Animasi Progres Alami (Simulasi Pindaian 4 Detik)
    let progress = 0;
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');
    const etaText = document.getElementById('etaText');

    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');
    const step3 = document.getElementById('step3');

    const interval = setInterval(() => {
      progress += 2;
      if (progress > 100) progress = 100;

      progressBar.style.width = progress + '%';

      if (progress < 40) {
        progressText.innerText = progress + '% — Menganalisis Degradasi Selulosa...';
        etaText.innerText = 'ETA: ~3 Detik';
        step1.style.color = '#34AC98';
        step1.innerHTML = '🟢 Selesai: Dekompilasi berkas resolusi tinggi & verifikasi tanda tangan digital.';
      } else if (progress < 80) {
        progressText.innerText = progress + '% — Mengukur Kadar Keasaman (pH) & Spora Jamur...';
        etaText.innerText = 'ETA: ~1 Detik';
        step2.style.color = '#34AC98';
        step2.innerHTML = '🟢 Selesai: Mendeteksi tingkat kerapuhan serat kertas dan diskolorasi pigmentasi.';
      } else {
        progressText.innerText = progress + '% — Memetakan Rekomendasi Restorasi Presisi...';
        etaText.innerText = 'ETA: ~0 Detik';
        step3.style.color = '#34AC98';
        step3.innerHTML = '🟢 Selesai: Pencocokan ke basis data SOP restorasi ANRI & UGM.';
      }

      if (progress >= 100) {
        clearInterval(interval);
        setTimeout(() => {
          window.location.href = '../hasil_diagnosa/hasil_diagnosa.php';
        }, 500);
      }
    }, 80);
  </script>

</body>
</html>