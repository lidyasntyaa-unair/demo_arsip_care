<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jasa Konservator - Konsultasi Chatbot Arsip Care</title>
  <link rel="stylesheet" href="konsultasi_konservator.css">
  <style>
    /* Style Tambahan untuk Info File Terupload */
    .file-upload-container {
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .file-status-badge {
      display: none;
      align-items: center;
      gap: 0.4rem;
      background: #E6F7F4;
      border: 1px solid #34AC98;
      color: #0B2240;
      font-size: 0.75rem;
      font-weight: 600;
      padding: 0.35rem 0.65rem;
      border-radius: 0.4rem;
      max-width: 220px;
    }

    .file-status-badge span {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .btn-remove-file {
      background: none;
      border: none;
      color: #EF4444;
      font-weight: bold;
      cursor: pointer;
      font-size: 0.9rem;
      padding: 0 0.2rem;
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
        <a href="konsultasi_konservator.php" class="active">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Layout Utama dengan Sidebar dan Chat Area -->
  <div class="chat-app-container">
    
    <!-- Sidebar Kiri -->
    <aside class="sidebar">
      <button class="btn-new-chat">+ Obroalan Baru</button>
      
      <div class="sidebar-section">
        <span class="sidebar-title">RIWAYAT KONSULTASI</span>
        <div class="chat-history-item active">
          <strong>Penanganan Ijazah Basah</strong>
          <small>Aktif • 2 jam lalu</small>
        </div>
      </div>
    </aside>

    <!-- Main Chat Content -->
    <main class="chat-main-content">
      
      <!-- Banner Header Konservator -->
      <div class="conservator-sub-header">
        <div class="sub-header-left">
          <img src="../index/logo arsipcare.jpg" alt="Arsip Care" class="asisten-logo" onerror="this.onerror=null; this.src='../logo arsipcare.jpg';">
          <div>
            <h3>Asisten Konservator</h3>
            <p>Standar ANRI & ISO 11799 | Berbasis Sertifikasi Kearsipan Nasional</p>
          </div>
        </div>
        
        <!-- Element Upload & Status File -->
        <div class="file-upload-container">
          <!-- Input File Tersembunyi -->
          <input type="file" id="fileExplorerInput" style="display: none;" onchange="handleFileSelect(this)">
          
          <!-- Tombol Pemicu Upload -->
          <button type="button" class="btn-export-pdf" onclick="document.getElementById('fileExplorerInput').click()">📄 Upload Dokumen</button>
          
          <!-- Badge Info Nama File yang Berhasil Diupload (Muncul di Halaman) -->
          <div id="fileStatusBadge" class="file-status-badge">
            <span id="fileNameDisplay"></span>
            <button type="button" class="btn-remove-file" onclick="removeSelectedFile()" title="Hapus file">&times;</button>
          </div>
        </div>
      </div>

      <!-- Hero Title -->
      <div class="chat-hero">
        <h2>Konsultasi Penanganan & Preservasi Dokumen</h2>
        <p>Tanyakan panduan pertolongan pertama atau klarifikasi penanganan dokumen rapuh Anda secara langsung.</p>
      </div>

      <!-- Quick Prompt Cards -->
      <div class="quick-prompts-grid">
        <div class="prompt-card" onclick="fillInput('Cara mengeringkan Ijazah basah tanpa merusak tinta tulisan tangan?')">
          <span class="prompt-icon">🔍</span>
          <p>Cara mengeringkan Ijazah basah tanpa merusak tinta tulisan tangan?</p>
        </div>
        <div class="prompt-card" onclick="fillInput('Menghilangkan noda jamur & bekas kelembapan pada sertifikat tanah kuno?')">
          <span class="prompt-icon">💡</span>
          <p>Menghilangkan noda jamur & bekas kelembapan pada sertifikat tanah kuno?</p>
        </div>
        <div class="prompt-card" onclick="fillInput('Panduan untuk merawat merusak kertas surat tanah bertahun-tahun?')">
          <span class="prompt-icon">⚠️</span>
          <p>Panduan untuk merawat merusak kertas surat tanah bertahun-tahun?</p>
        </div>
        <div class="prompt-card" onclick="fillInput('Bahan perekat aman untuk menambal kertas arsip keluarga yang robek?')">
          <span class="prompt-icon">✔️</span>
          <p>Bahan perekat aman untuk menambal kertas arsip keluarga yang robek?</p>
        </div>
      </div>

      <!-- Category Tags / Filter Pills -->
      <div class="category-pills">
        <span class="pill-tag" onclick="fillInput('Penanganan Laporan Ijazah / SK')">📍 Laporan Ijazah / SK</span>
        <span class="pill-tag" onclick="fillInput('Berkas Legalisir dan Dokumen Resmi')">📁 Berkas Legalisir</span>
        <span class="pill-tag" onclick="fillInput('Penjilidan dan Restorasi Buku Kuno')">📜 Penjilidan Buku</span>
      </div>

      <!-- Chat Input Area -->
      <div class="chat-input-wrapper">
        <form action="../hasil_konsultasi_konservator/hasil_konsultasi_konservator.php" method="GET" class="chat-form">
          <input type="text" id="chatInput" name="q" placeholder="Tanyakan gejala kerusakan dokumen atau pedoman bahan kearsipan..." required>
          <button type="submit" class="btn-send">Kirim &rarr;</button>
        </form>
      </div>

    </main>
  </div>

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

  <script>
    function fillInput(text) {
      document.getElementById('chatInput').value = text;
      document.getElementById('chatInput').focus();
    }

    // Fungsi Menampilkan Nama File Terupload di Halaman
    function handleFileSelect(input) {
      const badge = document.getElementById('fileStatusBadge');
      const fileNameSpan = document.getElementById('fileNameDisplay');
      
      if (input.files && input.files[0]) {
        const fileName = input.files[0].name;
        fileNameSpan.textContent = "📎 " + fileName;
        badge.style.display = "inline-flex"; // Menampilkan badge nama file di halaman
      }
    }

    // Fungsi Menghapus File Terpilih
    function removeSelectedFile() {
      const input = document.getElementById('fileExplorerInput');
      const badge = document.getElementById('fileStatusBadge');
      
      input.value = ""; // Reset input file
      badge.style.display = "none"; // Sembunyikan badge
    }
  </script>

</body>
</html>