<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Alat Restorasi & DIY Repair Kit - Arsip Care</title>
  <link rel="stylesheet" href="katalog.css">
  <style>
    body {
      background-color: #F8FAFC;
      font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    }

    .catalog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 1.5rem;
      margin-bottom: 3rem;
    }

    .product-card {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 0.85rem;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
      transition: all 0.25s ease-in-out;
    }

    .product-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08);
      border-color: #CBD5E1;
    }

    .product-img-wrapper {
      width: 100%;
      height: 160px;
      border-radius: 0.5rem;
      overflow: hidden;
      background: #FFFFFF;
      border: 1px solid #F1F5F9;
      margin-bottom: 0.85rem;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0.25rem;
      box-sizing: border-box;
    }

    .product-img-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }

    .badge-arsip {
      font-size: 0.6rem;
      font-weight: 800;
      color: #34AC98;
      background: #E6F7F4;
      padding: 0.15rem 0.4rem;
      border-radius: 0.2rem;
      display: inline-block;
      margin-bottom: 0.35rem;
    }

    .product-title {
      font-size: 0.825rem;
      font-weight: 700;
      color: #0B2240;
      line-height: 1.3;
      height: 2.6em;
      overflow: hidden;
      margin: 0;
    }

    .product-price {
      font-size: 1rem;
      font-weight: 900;
      color: #EE4D2D;
      margin-top: 0.5rem;
    }

    .btn-shopee {
      display: block;
      text-align: center;
      background: #EE4D2D;
      color: #FFFFFF;
      font-weight: 700;
      font-size: 0.75rem;
      padding: 0.55rem;
      border-radius: 0.4rem;
      text-decoration: none;
      margin-top: 0.85rem;
      transition: background 0.2s ease;
    }

    .btn-shopee:hover {
      background: #D73211;
    }
  </style>
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
        <a href="../asesman/asesman.php">Konsultasi</a>
        <a href="katalog.php" class="active">Katalog</a>
        <a href="../konsultasi_konservator/konsultasi_konservator.php">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <!-- Banner Shopee Official Store -->
  <main class="container" style="padding: 2rem 1.5rem;">
    <div style="background: linear-gradient(135deg, #FF5722, #EE4D2D); border-radius: 1rem; padding: 1.25rem 1.5rem; color: #FFFFFF; display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; box-shadow: 0 10px 20px -5px rgba(238, 77, 45, 0.3);">
      <div>
        <span style="background: rgba(255,255,255,0.2); font-size: 0.65rem; font-weight: 800; padding: 0.2rem 0.5rem; border-radius: 0.25rem; letter-spacing: 0.05em;">SHOPEE OFFICIAL STORE</span>
        <h2 style="font-size: 1.15rem; font-weight: 800; margin-top: 0.25rem;">Official Store di Shopee: Nikmati Gratis Ongkir XTRA & Kemasan Anti-Lembap</h2>
      </div>
      <a href="https://shopee.co.id/shop/1932803940" target="_blank" style="background: #FFFFFF; color: #EE4D2D; font-weight: 800; font-size: 0.8rem; padding: 0.6rem 1.25rem; border-radius: 0.5rem; text-decoration: none;">Kunjungi Toko Resmi &rarr;</a>
    </div>

    <div style="text-align: center; max-width: 650px; margin: 0 auto 2rem auto;">
      <h1 style="font-size: 1.5rem; font-weight: 800; color: #0B2240;">Katalog Alat Restorasi & DIY Repair Kit</h1>
      <p style="font-size: 0.8rem; color: #64748B; margin-top: 0.35rem;">Bahan dan alat restorasi bersertifikasi kearsipan. Tersedia pembelian langsung dan pengiriman terproteksi via Shopee Official Store.</p>
    </div>

    <!-- Grid Produk Katalog -->
    <div class="catalog-grid" id="catalogGrid"></div>
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
    // Data Produk (Lengkap dengan Link Shopee dari File PDF Belanja)
    const products = [
      { name: "DIY Repair-kit Penambalan Standar", price: "Rp 2.834.220", img: "DIY Repair Kit Penambalan Standar.jpg", link: "https://id.shp.ee/Sqoj7iDu" },
      { name: "DIY Repair-kit Penambalan Platinum", price: "Rp 1.415.867", img: "DIY Repair Kit Penambalan Platinum 2.jpg", link: "https://id.shp.ee/uGkvsTaw" },
      { name: "DIY Repair-kit Laminasi Standar", price: "Rp 12.244.621", img: "DIY Repair Kit Laminasi Standar.jpg", link: "https://id.shp.ee/X1hj8TRJ" },
      { name: "DIY Repair-kit Laminasi Platinum", price: "Rp 20.803.946", img: "DIY Repair Kit Laminasi Platinum.jpg", link: "https://id.shp.ee/EnpxBKGq" },
      { name: "DIY Repair-kit Deasidifikasi Standar", price: "Rp 2.409.220", img: "DIY Repair Kit Deasidifikasi Standar.jpg", link: "https://id.shp.ee/gDhviCEm" },
      { name: "DIY Repair-kit Deasidifikasi Platinum", price: "Rp 3.557.660", img: "DIY Repair Kit Deasidifikasi Platinum.jpg", link: "https://id.shp.ee/EWPHSTE" },
      { name: "DIY Repair-kit Penjilidan Standar", price: "Rp 87.495", img: "DIY Repair Kit Penjilidan Standar.jpg", link: "https://id.shp.ee/QLnJYt5N" },
      { name: "DIY Repair-kit Penjilidan Platinum", price: "Rp 137.455", img: "DIY Repair Kit Penjilidan Platinum.jpg", link: "https://id.shp.ee/PDeZ8MpX" },
      { name: "Paket Standar Enkapsulasi", price: "Rp 40.000", img: "Paket Standar Enkapsulasi.jpg", link: "https://id.shp.ee/vtk8WDo3" },
      { name: "Paket Platinum Enkapsulasi", price: "Rp 446.949", img: "Paket Platinum Enkapsulasi.jpg", link: "https://id.shp.ee/2fmohTuT" },
      { name: "Kertas Tisu Jepang Tengujo 9gsm", price: "Rp 12.099.000", img: "Tisu Jepang.jpg", link: "https://id.shp.ee/GVz433oj" },
      { name: "Serbuk Perekat Metil Selulosa (CMC)", price: "Rp 1.700.000", img: "Bubuk CMC 1 Kg.jpg", link: "https://id.shp.ee/VqkYxDzg" },
      { name: "Folder Enkapsulasi Polyester Mylar A4", price: "Rp 205.178", img: "Polyester A4.jpg", link: "https://id.shp.ee/2aXm4rXb" },
      { name: "Kuas Hake Bulu Domba Restorasi", price: "Rp 10.710", img: "Kuas.jpg", link: "https://id.shp.ee/Th3R6cUQ" },
      { name: "E-Modul Panduan Mandiri Restorasi", price: "Rp 43.890", img: "Flashdisk Sandisk.jpg", link: "https://id.shp.ee/crXsiBNt" },
      { name: "Botol Spray Preservasi Kearsipan", price: "Rp 30.000", img: "Botol spray.jpg", link: "https://id.shp.ee/YXa4trEk" },
      { name: "Bubuk Magnesium Karbonat Deasidifikasi", price: "Rp 1.912.680", img: "Bubuk Magnesium Karbonat.jpg", link: "https://id.shp.ee/qsTUzTaW" },
      { name: "Cutting Mat Alas Potong Presisi", price: "Rp 139.860", img: "Cutting mat.jpg", link: "https://id.shp.ee/h62SpwQs" },
      { name: "Double Tape Bebas Asam (Acid-Free)", price: "Rp 9.832", img: "Double tape.jpg", link: "https://id.shp.ee/rXJhKmJY" },
      { name: "Etanol 98% Murni Pelarut Spora", price: "Rp 738.000", img: "Etanol 98%.jpg", link: "https://id.shp.ee/7D2Vqg1M" },
      { name: "Filmoplast P90 Tape Restorasi", price: "Rp 1.400.000", img: "Filmoplast.jpg", link: "https://id.shp.ee/6YK4jZm2" },
      { name: "Gunting Presisi Kertas Arsip", price: "Rp 15.867", img: "Gunting Joyko.jpg", link: "https://id.shp.ee/SsFmAoGj" },
      { name: "Gunting Biasa Kearsipan", price: "Rp 7.500", img: "Gunting Biasa.jpg", link: "https://id.shp.ee/FUSGHrpa" },
      { name: "Jarum Jahit Jilid Buku Kuno", price: "Rp 7.275", img: "Jarum.jpg", link: "https://id.shp.ee/4KRCfBEd" },
      { name: "Kain Linen Preservasi Sampul", price: "Rp 18.112", img: "Kain Linen.jpg", link: "https://id.shp.ee/BnoE3dfA" },
      { name: "Kapur Barus Anti Jamur & Serangga", price: "Rp 15.208", img: "Kapur barus.jpg", link: "https://id.shp.ee/n3yZJidF" },
      { name: "Kertas Karton Bebas Asam 3mm", price: "Rp 16.894", img: "Kertas Karton Tebal 3ml Uk A4.jpg", link: "https://id.shp.ee/xECobVVB" },
      { name: "AquaScience Aquadest Air Murni 5L", price: "Rp 496.540", img: "Aquades.jpg", link: "https://id.shp.ee/NVrbGwfx" },
      { name: "Alat Press Kayu Restorasi Manual", price: "Rp 163.885", img: "Alat pres.jpg", link: "https://id.shp.ee/WcyzcRhx" },
      { name: "Alat Fumigasi Mandiri", price: "Rp 302.770", img: "Alat Fumigasi Mandiri.jpg", link: "https://id.shp.ee/gPeAoDTB" },
      { name: "Amplop Bebas Asam Pelindung Dokumen", price: "Rp 10.531", img: "Amplop Bebas Asam.jpg", link: "https://id.shp.ee/RMBmqi36" },
      { name: "Benang Jeans Kuat Jilid Dokumen", price: "Rp 16.468", img: "Benang jeans.jpg", link: "https://id.shp.ee/hRLzgGWM" },
      { name: "Benang Wol Jilid Portepel", price: "Rp 9.000", img: "Benang wol.jpg", link: "https://id.shp.ee/nv9YusoG" },
      { name: "Boks Arsip Bebas Asam Standar ANRI", price: "Rp 11.870", img: "Boks arsip.jpg", link: "https://id.shp.ee/nLizmePL" },
      { name: "Guide Pembatas Berkas Arsip", price: "Rp 4.855", img: "Guide.jpg", link: "https://id.shp.ee/avkA7jyY" },
      { name: "Kertas Sampul Pelindung Luar", price: "Rp 12.650", img: "Kertas sampul.jpg", link: "https://id.shp.ee/uECpkqJj" },
      { name: "Lem Rajawali Formulasi Kearsipan", price: "Rp 19.819", img: "Lem rajawali.jpg", link: "https://id.shp.ee/ibb9qpRT" },
      { name: "Map Folder Arsip Bebas Asam", price: "Rp 5.280", img: "Map folder arsip.jpg", link: "https://id.shp.ee/v55UfG3K" },
      { name: "Map Gantung File Kearsipan", price: "Rp 9.440", img: "Map gantung.jpg", link: "https://id.shp.ee/zbjDh4Dx" },
      { name: "Masker 3 Ply Disposable Box 50 Pcs", price: "Rp 28.176", img: "Masker 3 play.jpg", link: "https://id.shp.ee/Fi6Wo5r9" },
      { name: "Penggaris Besi 40 cm Presisi", price: "Rp 12.546", img: "Penggaris Besi 40 cm.jpg", link: "https://id.shp.ee/9MTc2n9o" },
      { name: "Penggaris Besi Stainless Heavy Duty", price: "Rp 24.723", img: "Penggaris Besi Stanless.jpg", link: "https://id.shp.ee/MP2WuZdx" },
      { name: "Pisau Cutter Heavy Duty 18mm", price: "Rp 4.125", img: "Pisau Cutter 18 MM.jpg", link: "https://id.shp.ee/wwawPcYE" },
      { name: "Rakel Alat Pelapis Enkapsulasi Mylar", price: "Rp 15.441", img: "Rakel.jpg", link: "https://id.shp.ee/kFyf3Rvn" },
      { name: "Sarung Tangan Karet Latex Box 50 Pcs", price: "Rp 38.870", img: "Sarung tangan latex.jpg", link: "https://id.shp.ee/UoKYxuJp" },
      { name: "Spons Halus Pembersih Debu Kertas", price: "Rp 18.360", img: "Spons.jpg", link: "https://id.shp.ee/srdSc5c1" },
      { name: "USB 3.0 Type C Flashdisk SanDisk 32GB", price: "Rp 106.300", img: "USB 3.0 and Type C Merek HP.jpg", link: "https://id.shp.ee/SRnKggp3" }
    ];

    const grid = document.getElementById('catalogGrid');
    products.forEach(p => {
      grid.innerHTML += `
        <div class="product-card">
          <div>
            <div class="product-img-wrapper">
              <img src="${p.img}" alt="${p.name}" onerror="this.onerror=null; this.src='../logo arsipcare.jpg';">
            </div>
            <span class="badge-arsip">STANDAR ARSIP</span>
            <h3 class="product-title" title="${p.name}">${p.name}</h3>
            <div class="product-price">${p.price}</div>
          </div>
          <a href="${p.link}" target="_blank" class="btn-shopee">
            🛒 Beli di Shopee
          </a>
        </div>
      `;
    });
  </script>

</body>
</html>