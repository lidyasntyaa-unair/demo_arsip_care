<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulir Jasa Konservator - Arsip Care</title>
  <link rel="stylesheet" href="form_jasa_konservator.css">
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

  <!-- Container Utama Halaman -->
  <main class="container form-page-container">
    
    <!-- Tab Navigasi Langkah -->
    <div class="steps-nav-bar">
      <div class="step-item completed">
        <span class="step-num">01</span>
        <div class="step-label">
          <small>Langkah Pertama</small>
          <strong>1. Data Demografi</strong>
        </div>
      </div>
      <div class="step-item active">
        <span class="step-num">02</span>
        <div class="step-label">
          <small>Langkah Kedua</small>
          <strong>2. Unggah Foto</strong>
        </div>
      </div>
    </div>

    <!-- Layout Grid 2 Kolom -->
    <div class="form-layout-grid">
      
      <!-- Kolom Kiri: Formulir Utama -->
      <div class="form-left-col">
        
        <!-- Section 1: Informasi Dokumen Fisik -->
        <div class="card-section">
          <div class="card-header">
            <h3>📝 Informasi Dokumen Fisik</h3>
            <span class="badge-status-green">Langkah 1 dari 2</span>
          </div>
          <p class="section-desc">Mohon lengkapi data fisik naskah agar kurator dapat memberikan estimasi dengan tepat.</p>
          
          <form id="conservatorForm" action="../order_konservator/order_konservator.php" method="POST">
            <div class="form-row-2">
              <div class="form-group">
                <label>Jenis Dokumen Kearsipan <span class="required">*</span></label>
                <select name="jenis_dokumen" required>
                  <option value="" disabled selected>-- Pilih Jenis Dokumen Pribadi --</option>
                  <option value="pendidikan">Pendidikan & Akademik (Ijazah, Transkrip, Sertifikat)</option>
                  <option value="kependudukan">Kependudukan (Akta Kelahiran, KK, KTP, Paspor)</option>
                  <option value="kepemilikan">Kepemilikan & Aset (Sertifikat SHM, BPKB, AJB)</option>
                  <option value="pernikahan">Pernikahan & Keluarga (Buku Nikah, Akta Perkawinan)</option>
                  <option value="legalitas">Legalitas & Keuangan (Surat Wasiat, Akta Kematian, SK)</option>
                  <option value="naskah_kuno">Naskah / Arsip Kuno / Dokumen Sejarah Keluarga</option>
                </select>
              </div>
              <div class="form-group">
                <label>Tahun Pembuatan / Terbitan <span class="required">*</span></label>
                <input type="number" name="tahun_dokumen" placeholder="Contoh: 1950" value="" required>
              </div>
            </div>

            <div class="form-group">
              <label>Nomor Sertifikat / Identitas Dokumen</label>
              <input type="text" name="no_dokumen" placeholder="Masukkan nomor dokumen jika ada" value="">
            </div>

            <div class="form-group">
              <label>Rincian Kerusakan & Chronology Kerusakan <span class="required">*</span></label>
              <textarea name="rincian_kerusakan" rows="3" placeholder="Jelaskan secara singkat kondisi dokumen Anda (misal: kertas rapuh, berjamur, robek pada lipatan, dll...)" required></textarea>
            </div>
          </form>
        </div>

        <!-- Section 2: Dokumen Foto Forensik (3 Sudut) -->
        <div class="card-section">
          <div class="card-header">
            <h3>📷 Dokumen Foto Forensik (3 Sudut)</h3>
            <span class="badge-subtext">Wajib unggah minimal 1 sudut foto</span>
          </div>
          <p class="section-desc">Ambil foto menggunakan kamera HP/Perangkat Anda dari 3 sudut berbeda di bawah pencahayaan yang terang.</p>

          <div class="upload-slots-grid">
            
            <!-- Slot 1 -->
            <div class="upload-box" id="box-1" onclick="triggerFileSelect(1)">
              <input type="file" id="input-file-1" accept="image/*" style="display: none;" onchange="handleImageUpload(event, 1)">
              <div class="empty-state" id="empty-1">
                <div class="upload-icon">📷</div>
                <strong>Tampak Depan Utuh</strong>
                <small>Klik untuk unggah foto</small>
              </div>
              <div class="preview-state" id="preview-1" style="display: none;">
                <img id="img-preview-1" src="" alt="Preview 1">
                <div class="preview-overlay">
                  <span class="preview-tag">Depan Utuh</span>
                  <button type="button" class="btn-remove-img" onclick="removeImage(event, 1)">✕ Hapus</button>
                </div>
              </div>
            </div>

            <!-- Slot 2 -->
            <div class="upload-box" id="box-2" onclick="triggerFileSelect(2)">
              <input type="file" id="input-file-2" accept="image/*" style="display: none;" onchange="handleImageUpload(event, 2)">
              <div class="empty-state" id="empty-2">
                <div class="upload-icon">🔍</div>
                <strong>Zoom Sisi Kerusakan</strong>
                <small>Klik untuk unggah foto</small>
              </div>
              <div class="preview-state" id="preview-2" style="display: none;">
                <img id="img-preview-2" src="" alt="Preview 2">
                <div class="preview-overlay">
                  <span class="preview-tag">Detail Kerusakan</span>
                  <button type="button" class="btn-remove-img" onclick="removeImage(event, 2)">✕ Hapus</button>
                </div>
              </div>
            </div>

            <!-- Slot 3 -->
            <div class="upload-box" id="box-3" onclick="triggerFileSelect(3)">
              <input type="file" id="input-file-3" accept="image/*" style="display: none;" onchange="handleImageUpload(event, 3)">
              <div class="empty-state" id="empty-3">
                <div class="upload-icon">📑</div>
                <strong>Tampak Belakang / Sisi</strong>
                <small>Klik untuk unggah foto</small>
              </div>
              <div class="preview-state" id="preview-3" style="display: none;">
                <img id="img-preview-3" src="" alt="Preview 3">
                <div class="preview-overlay">
                  <span class="preview-tag">Belakang / Sisi</span>
                  <button type="button" class="btn-remove-img" onclick="removeImage(event, 3)">✕ Hapus</button>
                </div>
              </div>
            </div>

          </div>
          <p class="upload-info-note">ℹ️ Format foto yang didukung: JPG, PNG, WEBP. Maksimal 10MB per file foto.</p>
        </div>

        <!-- Section 3: Pilihan Logistik & Proteksi -->
        <div class="card-section">
          <h3>📦 Pilihan Logistik & Proteksi Ekspedisi</h3>
          <p class="section-desc">Pilih metode pengiriman berkas yang paling aman bagi dokumen Anda.</p>
          
          <div class="options-radio-grid">
            <label class="radio-card active">
              <input type="radio" name="logistik" value="brankas" checked>
              <div class="radio-body">
                <strong>Pengjemputan Terproteksi</strong>
                <small>Tim resmi Arsip Care menjemput dokumen langsung dengan boks brankas terunci SSL.</small>
              </div>
              <span class="radio-price">Rp 50.000</span>
            </label>

            <label class="radio-card">
              <input type="radio" name="logistik" value="mandiri">
              <div class="radio-body">
                <strong>Anter Langsung/Kirim Mandiri ke Lab</strong>
                <small>Pengiriman via kurir pilihan Anda (JNE/JNT/Sicepat) langsung ke Lab UNAIR.</small>
              </div>
              <span class="radio-price">Gratis</span>
            </label>
          </div>
        </div>

        <!-- Checkbox Konfirmasi -->
        <div class="agreement-box">
          <label class="checkbox-container">
            <input type="checkbox" id="chkAgreement" required>
            <span class="checkmark"></span>
            <span class="agreement-text">Saya menyetujui bahwa informasi dan foto arsip yang saya berikan adalah benar dan siap diproses untuk telaah pra-restorasi laboratorium.</span>
          </label>
        </div>

        <!-- Tombol Submit Lanjut -->
        <div class="submit-action-wrapper">
          <button type="button" onclick="submitForm()" class="btn-submit-main">
            Selanjutnya &rarr;
          </button>
        </div>

      </div>

      <!-- Kolom Kanan: Sidebar Ringkasan (Tanpa Menampilkan Nominal Harga) -->
      <aside class="form-sidebar-right">
        
        <!-- Card Info Laboratorium Terpadu -->
        <div class="sidebar-info-card">
          <div class="info-card-header">
            <span class="lab-badge-icon">🏛️</span>
            <div>
              <h4>Laboratorium Kearsipan Terpadu</h4>
              <small>Fakultas Vokasi Universitas Airlangga</small>
            </div>
          </div>

          <div class="lab-accreditation-box">
            <span>STANDAR AKREDITASI RESMI:</span>
            <strong>ANRI No. 048/Restorasi-Kertas & ISO 11799</strong>
          </div>

          <ul class="guarantee-list">
            <li>
              <span class="check-icon">✓</span>
              <p><strong>Uji Keasaman pH & Spektroskopi Gratis:</strong> Dilakukan sebelum tindakan restorasi fisik dimulai.</p>
            </li>
            <li>
              <span class="check-icon">✓</span>
              <p><strong>Pelindung Bebas Asam Permanen:</strong> Menggunakan Mylar Polyester Film Inersia standar preservasi museum dunia.</p>
            </li>
            <li>
              <span class="check-icon">✓</span>
              <p><strong>BAST Legal & Bergaransi:</strong> Berita Acara Serah Terima resmi & proteksi garansi hingga 5 tahun.</p>
            </li>
          </ul>
        </div>

        <!-- Card Informasi Penilaian Estimasi Biaya (Tanpa Nominal Harga) -->
        <div class="investment-summary-card">
          <small class="summary-label">SISTEM PENILAIAN RESTORASI:</small>
          <div class="price-display">
            <h2 style="font-size: 1.05rem; font-weight: 800; color: #0D5C4D; margin: 0.2rem 0;">Kalkulasi Tingkat Kerusakan</h2>
          </div>
          <small class="price-subtext" style="line-height: 1.4; display: block; margin-top: 0.25rem;">
            Rincian investasi biaya restorasi akan dikalkulasi pada halaman berikutnya berdasarkan tingkat kerusakan fisik dan kompleksitas penanganan dokumen Anda.
          </small>
        </div>

        <!-- Card Bantuan WhatsApp -->
        <div class="contact-support-card">
          <strong>Bantuan Langsung Konservator:</strong>
          <p>Butuh panduan pengemasan sebelum penjemputan?</p>
          <a href="https://wa.me/6285718192720?text=Halo%20Arsip%20Care,%20saya%20butuh%20bantuan%20pengisian%20formulir%20restorasi." target="_blank" class="wa-support-link">
            💬 WhatsApp: 0857-181-92720
          </a>
        </div>

      </aside>

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

  <script>
    function triggerFileSelect(slotId) {
      document.getElementById('input-file-' + slotId).click();
    }

    function handleImageUpload(event, slotId) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('img-preview-' + slotId).src = e.target.result;
          document.getElementById('empty-' + slotId).style.display = 'none';
          document.getElementById('preview-' + slotId).style.display = 'block';
          document.getElementById('box-' + slotId).classList.add('has-file');
        }
        reader.readAsDataURL(file);
      }
    }

    function removeImage(event, slotId) {
      event.stopPropagation();
      document.getElementById('input-file-' + slotId).value = '';
      document.getElementById('img-preview-' + slotId).src = '';
      document.getElementById('preview-' + slotId).style.display = 'none';
      document.getElementById('empty-' + slotId).style.display = 'flex';
      document.getElementById('box-' + slotId).classList.remove('has-file');
    }

    function submitForm() {
      const form = document.getElementById('conservatorForm');
      const chk = document.getElementById('chkAgreement');
      
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      if (!chk.checked) {
        alert("Mohon centang persetujuan informasi sebelum melanjutkan.");
        return;
      }
      
      form.submit();
    }
  </script>

</body>
</html>