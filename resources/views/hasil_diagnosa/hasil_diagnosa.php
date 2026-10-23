<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Diagnosa Dokumen - Arsip Care</title>
  <link rel="stylesheet" href="hasil_diagnosa.css">
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
  <main class="container" style="padding: 2rem 1.5rem;">
    
    <!-- Header Ringkasan Medis Dokumen -->
    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 1rem; padding: 1.5rem; margin-bottom: 1.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
      <span style="font-size: 0.675rem; font-weight: 800; color: #34AC98; letter-spacing: 0.05em; display: block; margin-bottom: 0.35rem;">LAPORAN MEDIS ARSIP VITAL</span>
      <h1 style="font-size: 1.35rem; font-weight: 800; color: #0B2240; margin: 0;" id="docReportTitle">Hasil Diagnosa Dokumen: Loading...</h1>
      <p style="font-size: 0.775rem; color: #64748B; margin-top: 0.35rem;">
        Registrasi Berkas: <strong style="color: #0B2240;" id="regNumber">ARC-DOC-2026-8021</strong> &nbsp;|&nbsp; 
        Pemeriksaan: <span id="docCategoryDisplay" style="color: #0B2240; font-weight: 600;">Kategori Arsip Resmi Negara</span>
      </p>
    </div>

    <!-- Grid Indikator Diagnosis Utama -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
      
      <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 0.85rem; padding: 1.25rem;">
        <span style="font-size: 0.7rem; color: #64748B; font-weight: 600; display: block;">Estimasi Derajat Asam</span>
        <strong style="font-size: 1.75rem; color: #EF4444; font-weight: 900;" id="phValue">pH 4.8</strong>
        <span style="font-size: 0.7rem; color: #DC2626; background: #FEE2E2; padding: 0.15rem 0.4rem; border-radius: 0.25rem; font-weight: 700; display: inline-block; margin-top: 0.35rem;">Asam Tinggi (Lignin Degradasi)</span>
      </div>

      <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 0.85rem; padding: 1.25rem;">
        <span style="font-size: 0.7rem; color: #64748B; font-weight: 600; display: block;">Indeks Kerapuhan Serat</span>
        <strong style="font-size: 1.75rem; color: #F59E0B; font-weight: 900;" id="fragilityValue">58%</strong>
        <span style="font-size: 0.7rem; color: #D97706; background: #FEF3C7; padding: 0.15rem 0.4rem; border-radius: 0.25rem; font-weight: 700; display: inline-block; margin-top: 0.35rem;">Rentan Pecah / Sobek</span>
      </div>

      <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 0.85rem; padding: 1.25rem;">
        <span style="font-size: 0.7rem; color: #64748B; font-weight: 600; display: block;">Infeksi Biologis / Jamur</span>
        <strong style="font-size: 1.75rem; color: #10B981; font-weight: 900;" id="fungusValue">Dormant</strong>
        <span style="font-size: 0.7rem; color: #059669; background: #D1FAE5; padding: 0.15rem 0.4rem; border-radius: 0.25rem; font-weight: 700; display: inline-block; margin-top: 0.35rem;" id="fungusBadge">Spora Non-Aktif</span>
      </div>

      <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 0.85rem; padding: 1.25rem;">
        <span style="font-size: 0.7rem; color: #64748B; font-weight: 600; display: block;">Prosedur Kuratif Utama</span>
        <strong style="font-size: 1.1rem; color: #0B2240; font-weight: 800; display: block; margin-top: 0.25rem;" id="curativeProcedure">Deasidifikasi + Mending</strong>
        <span style="font-size: 0.7rem; color: #34AC98; font-weight: 700;">Standar ISO 11799 Kearsipan</span>
      </div>

    </div>

    <!-- Pilihan Langkah Pemulihan Dokumen dengan Rekomendasi Link Produk Shopee Dinamis -->
    <h2 style="font-size: 1.125rem; font-weight: 800; color: #0B2240; margin-bottom: 1rem;">Pilih Langkah Pemulihan Dokumen</h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 1.5rem; margin-bottom: 2.5rem;">
      
      <!-- Solusi Mandiri (DIY) - Tautkan Langsung ke Produk Shopee Terkait -->
      <div style="background: #FFFFFF; border: 1px solid #A7F3D0; border-radius: 1rem; padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <span style="font-size: 0.65rem; font-weight: 800; color: #059669; background: #D1FAE5; padding: 0.2rem 0.5rem; border-radius: 0.25rem; letter-spacing: 0.05em;">SOLUSI MANDIRI (DIY)</span>
          <h3 style="font-size: 1rem; font-weight: 800; color: #0B2240; margin-top: 0.5rem;">Tangani dengan DIY Repair Kit Standar Kearsipan</h3>
          <p style="font-size: 0.75rem; color: #64748B; margin-top: 0.35rem; line-height: 1.5;">Rekomendasi paket perlengkapan restorasi mandiri terkalibrasi khusus sesuai indikasi kerusakan fisik dokumen Anda[cite: 44, 51].</p>
          
          <div style="background: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 0.65rem; padding: 0.85rem; margin-top: 1rem;">
            <strong style="font-size: 0.875rem; color: #0B2240; display: block;" id="diyKitName">DIY Repair-kit Penambalan Standar</strong>
            <span style="font-size: 0.7rem; color: #64748B;" id="diyKitDesc">Kertas Tisu Jepang + Lem Metil Selulosa + Mylar Enclosure</span>
            <div style="font-size: 1.15rem; font-weight: 900; color: #34AC98; margin-top: 0.5rem;" id="diyKitPrice">Rp 85.000</div>
          </div>
        </div>

        <a id="btnBuyDiyShopee" href="https://shopee.co.id/shop/1932803940" target="_blank" style="display: block; text-align: center; background: #34AC98; color: #FFFFFF; font-weight: 800; font-size: 0.85rem; padding: 0.75rem; border-radius: 0.5rem; text-decoration: none; margin-top: 1.25rem;">
          🛒 Beli Paket DIY Kit di Shopee &rarr;
        </a>
      </div>

      <!-- Solusi Profesional (Lab Conservator) -->
      <div style="background: #0B2240; color: #FFFFFF; border-radius: 1rem; padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <span style="font-size: 0.65rem; font-weight: 800; color: #34AC98; background: rgba(52, 172, 152, 0.2); padding: 0.2rem 0.5rem; border-radius: 0.25rem; letter-spacing: 0.05em;">SOLUSI PROFESIONAL (LAB CERTIFIED)</span>
          <h3 style="font-size: 1rem; font-weight: 800; color: #FFFFFF; margin-top: 0.5rem;">Layanan Kurasi & Restorasi Konservator Presisi</h3>
          <p style="font-size: 0.75rem; color: #94A3B8; margin-top: 0.35rem; line-height: 1.5;">Solusi bebas risiko untuk dokumen bernilai legalitas tinggi (Ijazah asli, SHM, Akta) yang memerlukan perlakuan kimiawi khusus oleh tim ahli[cite: 18, 52].</p>

          <ul style="font-size: 0.725rem; color: #CBD5E1; line-height: 1.6; padding-left: 1.25rem; margin-top: 1rem;">
            <li>🔒 Enkripsi End-to-End 256-bit & Chain of Custody[cite: 19, 20].</li>
            <li>🏛️ Ditangani Konservator Sertifikasi ANRI & UGM[cite: 21, 22].</li>
            <li>📜 Garansi Preservasi 25 Tahun & Berita Acara Legal[cite: 23].</li>
          </ul>
        </div>

        <a href="../konsultasi_konservator/konsultasi_konservator.php" style="display: block; text-align: center; background: #34AC98; color: #FFFFFF; font-weight: 800; font-size: 0.85rem; padding: 0.75rem; border-radius: 0.5rem; text-decoration: none; margin-top: 1.25rem;">
          💼 Pesan Jasa Konservator Sekarang &rarr;
        </a>
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

  <!-- Script Logika Penyesuaian Rekomendasi Produk Shopee Dinamis -->
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const userFileName = localStorage.getItem('uploadedFileName') || 'Dokumen_Pribadi.jpg';
      const docType = localStorage.getItem('docType') || 'Dokumen Resmi Kependudukan / Aset';
      const docYear = localStorage.getItem('docYear') || '1998';
      const checkedGejala = JSON.parse(localStorage.getItem('checkedGejala') || '[]');

      document.getElementById('docReportTitle').innerText = 'Hasil Diagnosa Dokumen: ' + userFileName.replace(/\.[^/.]+$/, "") + ' (' + docYear + ')';
      document.getElementById('docCategoryDisplay').innerText = docType;

      // Element Rekomendasi DIY
      const diyKitName = document.getElementById('diyKitName');
      const diyKitDesc = document.getElementById('diyKitDesc');
      const diyKitPrice = document.getElementById('diyKitPrice');
      const btnBuyDiyShopee = document.getElementById('btnBuyDiyShopee');

      // Logika Penentuan Rekomendasi Produk Shopee Spesifik berdasarkan Gejala Kerusakan
      if (checkedGejala.some(g => g.includes('Menguning') || g.includes('Asam'))) {
        diyKitName.innerText = "DIY Repair-kit Deasidifikasi Platinum";
        diyKitDesc.innerText = "Botol Spray + Bubuk Magnesium Karbonat + pH Meter + Reagen Neutralizer";
        diyKitPrice.innerText = "Rp 3.557.660";
        btnBuyDiyShopee.href = "https://shopee.co.id/shop/1932803940";
      } else if (checkedGejala.some(g => g.includes('Robek') || g.includes('Berlubang') || g.includes('Rayap'))) {
        diyKitName.innerText = "DIY Repair-kit Penambalan Platinum";
        diyKitDesc.innerText = "Kertas Tisu Jepang + Serbuk CMC + Kuas Hake + Cutting Mat & Roller";
        diyKitPrice.innerText = "Rp 1.115.817";
        btnBuyDiyShopee.href = "https://shopee.co.id/shop/1932803940";
      } else if (checkedGejala.some(g => g.includes('Basah') || g.includes('Banjir') || g.includes('Jamur'))) {
        diyKitName.innerText = "DIY Repair-kit Laminasi Platinum";
        diyKitDesc.innerText = "Penyerap Kelembapan + Etanol Pelarut Spora + Alat Pres & Enclosure";
        diyKitPrice.innerText = "Rp 20.803.946";
        btnBuyDiyShopee.href = "https://shopee.co.id/DIY-Repair-kit-Laminasi-Platinum-i.1932803940.44669261877";
      } else {
        // Standard Default Penambalan
        diyKitName.innerText = "DIY Repair-kit Penambalan Standar";
        diyKitDesc.innerText = "Kertas Tisu Jepang + Lem Metil Selulosa + Folder Enkapsulasi Mylar A4";
        diyKitPrice.innerText = "Rp 85.000";
        btnBuyDiyShopee.href = "https://shopee.co.id/shop/1932803940";
      }
    });
  </script>

</body>
</html>