<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konsultasi Asesmen Dokumen - Arsip Care</title>
  <link rel="stylesheet" href="asesman.css">
  <style>
    .file-status-card {
      background: #ECFDF5;
      border: 1px solid #A7F3D0;
      border-radius: 0.75rem;
      padding: 0.85rem 1.25rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      margin-top: 1rem;
    }
    .file-info-left {
      display: flex;
      align-items: center;
      gap: 0.85rem;
    }
    .raw-badge {
      background-color: var(--brand-teal);
      color: #FFFFFF;
      font-size: 0.65rem;
      font-weight: 800;
      padding: 0.25rem 0.5rem;
      border-radius: 0.35rem;
      letter-spacing: 0.05em;
    }
    .btn-change-file {
      background: transparent;
      border: none;
      color: #EF4444;
      font-size: 0.75rem;
      font-weight: 700;
      cursor: pointer;
      padding: 0.25rem 0.5rem;
      transition: opacity 0.2s;
    }
    .btn-change-file:hover {
      text-decoration: underline;
    }
  </style>
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
        <a href="asesman.php" class="active">Konsultasi</a>
        <a href="../katalog/katalog.php">Katalog</a>
        <a href="../konsultasi_konservator/konsultasi_konservator.php">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="container">
    <div class="main-layout">
      
      <!-- Kolom Kiri: Form Utama -->
      <div>
        
        <!-- Step 1: Unggah Spesimen Dokumen -->
        <div class="card-section">
          <div class="card-title-badge">
            <div class="step-header">
              <span class="step-num">1</span>
              <span>Unggah Spesimen Dokumen</span>
            </div>
            <span style="font-size: 0.675rem; font-weight: 800; color: #34AC98; background: #E6F7F4; padding: 0.2rem 0.5rem; border-radius: 0.25rem;">● Optical Triage Ready</span>
          </div>

          <!-- Input File Tersembunyi untuk File Explorer -->
          <input type="file" id="fileInput" accept="image/*,.pdf" style="display: none;" onchange="handleFileSelect(event)">

          <!-- Dropzone Upload Area -->
          <div class="upload-dropzone" onclick="document.getElementById('fileInput').click();" style="cursor: pointer;">
            <div class="upload-icon-wrapper">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="17 8 12 3 7 8"/><line x1="12" y1="3" x2="12" y2="15"/></svg>
            </div>
            <p style="font-weight: 800; font-size: 0.9rem; color: #1E293B; margin: 0;">Tarik & Lepas Foto Dokumen di Sini, atau <span style="color: var(--brand-teal); text-decoration: underline;">Jelajahi Berkas</span></p>
            <p style="font-size: 0.725rem; color: #94A3B8; margin-top: 0.35rem;">Mendukung format JPG, PNG, JPEG hingga 10MB per dokumen</p>
          </div>

          <!-- Card Status File (After State) -->
          <div id="fileStatusContainer" class="file-status-card" style="display: none;">
            <div class="file-info-left">
              <span class="raw-badge">RAW</span>
              <div>
                <div style="display: flex; align-items: center; gap: 0.35rem;">
                  <strong id="fileNameDisplay" style="font-size: 0.875rem; color: #0B2240;">Ijazah_SMA_1998_Basah.jpg</strong>
                  <span style="color: #34AC98; font-weight: 800;">✓</span>
                </div>
                <span id="fileSizeDisplay" style="font-size: 0.725rem; color: #64748B;">2.4 MB • Status: Siap Dianalisis Algoritma</span>
              </div>
            </div>

            <button type="button" class="btn-change-file" onclick="document.getElementById('fileInput').click();">
              Ganti
            </button>
          </div>
        </div>

        <!-- Step 2: Pilih Gejala Kerusakan Fisik -->
        <div class="card-section">
          <div class="step-header" style="margin-bottom: 0.25rem;">
            <span class="step-num">2</span>
            <span>Pilih Gejala Kerusakan Fisik</span>
          </div>
          <p style="font-size: 0.725rem; color: #64748B; margin-bottom: 1rem;">Pilih gejala yang terlihat kasat mata untuk meningkatkan presisi algoritma diagnosa konservator:</p>

          <div class="checkbox-grid">
            <label class="checkbox-card">
              <input type="checkbox">
              <div>
                <span class="checkbox-title">Kertas Menguning / Asam Rapuh</span>
                <span class="checkbox-desc">Diskolorasi lignifikasi, tepi mudah serpih</span>
              </div>
            </label>

            <label class="checkbox-card">
              <input type="checkbox">
              <div>
                <span class="checkbox-title">Basah Terkena Air / Banjir</span>
                <span class="checkbox-desc">Lembap, gelombang serat basah, berkerut</span>
              </div>
            </label>

            <label class="checkbox-card">
              <input type="checkbox">
              <div>
                <span class="checkbox-title">Robek / Berlubang / Terpotong</span>
                <span class="checkbox-desc">Serat terputus mekanik, bagian hilang (lacuna)</span>
              </div>
            </label>

            <label class="checkbox-card">
              <input type="checkbox">
              <div>
                <span class="checkbox-title">Tumbuh Jamur / Foxing</span>
                <span class="checkbox-desc">Bintik karat kemerahan atau spora jamur aktif</span>
              </div>
            </label>

            <label class="checkbox-card">
              <input type="checkbox">
              <div>
                <span class="checkbox-title">Dimakan Rayap / Serangga</span>
                <span class="checkbox-desc">Jejak terowongan, kotoran hama, tepian bergerigi</span>
              </div>
            </label>

            <label class="checkbox-card">
              <input type="checkbox">
              <div>
                <span class="checkbox-title">Tinta Luntur / Melekat Kaca</span>
                <span class="checkbox-desc">Pigmen buyar atau menempel kuat pada pigura</span>
              </div>
            </label>
          </div>
        </div>

        <!-- Step 3: Identifikasi & Tipologi Dokumen -->
        <div class="card-section">
          <div class="card-title-badge">
            <div class="step-header">
              <span class="step-num">3</span>
              <span>Identifikasi & Tipologi Dokumen</span>
            </div>
            <span style="font-size: 0.675rem; font-weight: 700; color: #64748B; background: #F1F5F9; padding: 0.2rem 0.5rem; border-radius: 0.25rem;">Opsional</span>
          </div>
          <p style="font-size: 0.725rem; color: #64748B; margin-bottom: 1rem;">Informasi tipologi membantu sistem memperkirakan komposisi selulosa kertas dan jenis media tinta resmi.</p>

          <div class="form-grid">
            <div class="form-group">
              <label>Jenis Dokumen Fisik</label>
              <select class="form-control">
                <option value="" disabled selected hidden>-- Pilih Jenis Dokumen Pribadi --</option>
                <option value="akademik">Pendidikan & Akademik (Ijazah, Transkrip, Sertifikat)</option>
                <option value="kependudukan">Kependudukan (Akta Kelahiran, KK, KTP, Paspor)</option>
                <option value="aset">Kepemilikan & Aset (Sertifikat SHM, BPKB, AJB)</option>
                <option value="pernikahan">Pernikahan & Keluarga (Buku Nikah, Akta Perkawinan)</option>
                <option value="keuangan">Legitimat & Keuangan (Surat Wasiat, Akta Kematian, SK)</option>
                <option value="cagar_budaya">Naskah / Arsip Kuno / Dokumen Sejarah Keluarga</option>
              </select>
            </div>

            <div class="form-group">
              <label>Perkiraan Tahun Penerbitan</label>
              <input type="number" class="form-control" placeholder="Contoh: 1998" min="1800" max="2026">
            </div>
          </div>
        </div>

        <!-- Tombol Aksi Utama: Mengarah ke Halaman NDA terlebih dahulu -->
        <a href="../nda/nda.php" class="btn-submit-main">
          <span>❖ Analisis Kondisi Dokumen Sekarang</span>
          <span>&rarr;</span>
        </a>

      </div>

      <!-- Kolom Kanan: Panduan & Info Keamanan -->
      <div>
        <div class="sidebar-card">
          <h3 class="sidebar-title">
            <span>📷</span>
            <span>Panduan Mengambil Foto Dokumen</span>
          </h3>
          <p style="font-size: 0.725rem; color: #64748B; margin-bottom: 1rem;">Kualitas visual menentukan akurasi identifikasi mikroba jamur dan tingkat degradasi selulosa:</p>

          <ul class="guide-list">
            <li class="guide-item">
              <span class="guide-num">1</span>
              <div>
                <strong style="display: block; color: #1E293B;">Pencahayaan Merata Alami</strong>
                <span style="color: #64748B;">Gunakan cahaya jendela siang hari atau lampu putih menyebar. Hindari blitz/flash kamera tegak lurus karena menimbulkan pantulan silau.</span>
              </div>
            </li>

            <li class="guide-item">
              <span class="guide-num">2</span>
              <div>
                <strong style="display: block; color: #1E293B;">Alas Meja Datar Kontras Gelap</strong>
                <span style="color: #64748B;">Letakkan dokumen di atas bidang datar (meja kayu tua, kain gelap, atau matras hitam) agar batas pinggiran kertas yang rapuh terdeteksi presisi.</span>
              </div>
            </li>

            <li class="guide-item">
              <span class="guide-num">3</span>
              <div>
                <strong style="display: block; color: #1E293B;">Tangkap 4 Sudut Lengkap</strong>
                <span style="color: #64748B;">Pastikan seluruh 4 sudut fisik dokumen berada di dalam bingkai foto tanpa terpotong untuk mengukur rasio distorsi penyusutan kertas.</span>
              </div>
            </li>
          </ul>

          <div style="background-color: #F8FAFC; border: 1px solid #E2E8F0; padding: 0.65rem; border-radius: 0.5rem; margin-top: 1rem; font-size: 0.7rem; color: #64748B;">
            <strong>Standar ISO/TR 19814</strong><br>
            Pedoman pemindaian konservasi arsip statis digital.
          </div>
        </div>

        <div class="security-box">
          <strong style="font-size: 0.85rem; color: #FFFFFF; display: block; margin-bottom: 0.35rem;">🛡️ Jaminan Keamanan & Kerahasiaan</strong>
          <p style="font-size: 0.725rem; color: #94A3B8;">Dokumen Anda berisi data privat sensitif. Platform menerapkan protokol perlindungan berlapis:</p>

          <ul class="security-list">
            <li>🔒 Enkripsi Bank-Grade 256-bit SSL/TLS</li>
            <li>⏱️ Spesimen foto otomatis terpurifikasi dalam 7 hari</li>
            <li>📄 Perlindungan Digital Non-Disclosure Agreement (NDA)</li>
          </ul>
        </div>

        <div style="background-color: #E6F7F4; border: 1px solid #A7F3D0; padding: 1rem; border-radius: 0.85rem; margin-top: 1.25rem;">
          <strong style="font-size: 0.8rem; color: var(--brand-dark); display: flex; align-items: center; gap: 0.35rem;">
            <span>📍</span> Butuh Penanganan Mendesak?
          </strong>
          <p style="font-size: 0.725rem; color: #475569; margin-top: 0.25rem;">Jika dokumen Anda terendam banjir pekat atau mengalami kebakaran dalam kurun waktu 12 jam terakhir:</p>
          <a href="https://wa.me/6285718192720" target="_blank" style="display: inline-block; background: #FFFFFF; border: 1px solid #A7F3D0; color: var(--brand-teal); font-size: 0.725rem; font-weight: 800; padding: 0.4rem 0.75rem; border-radius: 0.5rem; margin-top: 0.5rem; text-decoration: none;">Siaga Bencana Arsip Care 24 Jam ↗</a>
        </div>

      </div>

    </div>
  </main>

  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <strong style="font-size: 1rem; color: var(--brand-dark); display: block; margin-bottom: 0.5rem;">Arsip Care</strong>
        <p style="color: #64748B; font-size: 0.75rem; line-height: 1.6;">Platform pertolongan pertama dan restorasi dokumen berharga berbasis sertifikasi kearsipan nasional, terafiliasi dengan Vokasi Kearsipan Digital Universitas Airlangga.</p>
        <span style="display: block; margin-top: 1rem; font-size: 0.7rem; color: #94A3B8;">© 2026 Arsip Care. All rights reserved.</span>
      </div>

      <div>
        <h4 class="footer-title">Layanan Utama</h4>
        <ul class="footer-links">
          <li>✓ Asesmen Kerusakan Chatbot</li>
          <li>✓ Penjualan DIY Kit Standar Arsip</li>
          <li>✓ Konservasi Laboratorium</li>
          <li>✓ E-Modul Restorasi Arsip</li>
        </ul>
      </div>

      <div>
        <h4 class="footer-title">Keamanan & Legalitas</h4>
        <ul class="footer-links">
          <li>🔒 Digital NDA Enkripsi 256-bit</li>
          <li>⚖️ Standar ISO 11799 Preservasi</li>
          <li>📜 Panduan Etika Restorasi</li>
          <li>🔗 Chain of Custody Transparan</li>
        </ul>
      </div>

      <div>
        <h4 class="footer-title">Kontak & Darurat</h4>
        <ul class="footer-links">
          <li>📞 WhatsApp 0857-181-92720</li>
          <li>🏛️ Lab Konservasi Kampus B UNAIR</li>
          <li>✉️ arsipcare.id@gmail.com</li>
        </ul>
      </div>
    </div>
  </footer>

  <script>
    function handleFileSelect(event) {
      const file = event.target.files[0];
      if (file) {
        const fileName = file.name;
        const fileSize = (file.size / (1024 * 1024)).toFixed(1) + ' MB';

        localStorage.setItem('uploadedFileName', fileName);
        localStorage.setItem('uploadedFileSize', fileSize);

        const reader = new FileReader();
        reader.onload = function(e) {
          localStorage.setItem('uploadedImageSrc', e.target.result);
          document.getElementById('fileNameDisplay').innerText = fileName;
          document.getElementById('fileSizeDisplay').innerText = fileSize + ' • Status: Siap Dianalisis Algoritma';
          document.getElementById('fileStatusContainer').style.display = 'flex';
        };
        reader.readAsDataURL(file);
      }
    }

    // Tangkap data input form sebelum pindah halaman
    document.querySelector('.btn-submit-main').addEventListener('click', function(e) {
      // 1. Simpan Pilihan Jenis Dokumen & Tahun
      const docTypeSelect = document.querySelector('select.form-control');
      const docType = docTypeSelect ? docTypeSelect.options[docTypeSelect.selectedIndex].text : 'Dokumen Vital Pribadi';
      const docYear = document.querySelector('input[type="number"]').value || '1998';

      localStorage.setItem('docType', docType);
      localStorage.setItem('docYear', docYear);

      // 2. Simpan Checklist Gejala Kerusakan
      const checkedGejala = [];
      document.querySelectorAll('.checkbox-grid input[type="checkbox"]:checked').forEach(cb => {
        checkedGejala.push(cb.closest('.checkbox-card').querySelector('.checkbox-title').innerText.trim());
      });
      localStorage.setItem('checkedGejala', JSON.stringify(checkedGejala));
    });
  </script>

</body>
</html>