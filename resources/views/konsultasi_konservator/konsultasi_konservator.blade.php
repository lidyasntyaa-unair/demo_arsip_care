<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jasa Konservator - Konsultasi Chatbot Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/konsultasi_konservator.css') }}">
</head>
<body>

  <!-- Navbar Utama -->
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
        <a href="{{ url('/index') }}">Beranda</a>
        <a href="{{ url('/asesmen') }}">Konsultasi</a>
        <a href="{{ url('/katalog') }}">Katalog</a>
        <a href="{{ url('/konservator') }}" class="active">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Layout Utama dengan Sidebar dan Chat Area -->
  <div class="chat-app-container">

    <!-- Sidebar Kiri -->
    <aside class="sidebar">
      <button class="btn-new-chat">+ Obrolan Baru</button>

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
          <img src="{{ asset('images/logo arsipcare.jpg') }}" alt="Arsip Care" class="asisten-logo">
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

          <!-- Badge Info Nama File yang Berhasil Diupload -->
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
        <form action="{{ url('/hasil-konsultasi') }}" method="GET" class="chat-form">
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

  <script src="{{ asset('js/konsultasi_konservator.js') }}"></script>
</body>
</html>
