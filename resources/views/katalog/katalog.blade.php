<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Katalog Alat Restorasi & DIY Repair Kit - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/katalog.css') }}">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container navbar-container">
      <a href="{{ route('index') }}" class="brand-logo">
        <img src="{{ asset('images/logo arsipcare.jpg') }}" alt="Logo Arsip Care">
        <div>
          <span class="brand-title">Arsip Care</span>
          <span class="brand-subtitle">Preservasi & Restorasi Arsip Konvensional</span>
        </div>
      </a>
      <div class="nav-links">
        <a href="{{ route('index') }}">Beranda</a>
        <a href="{{ route('asesmen') }}">Konsultasi</a>
        <a href="{{ route('katalog') }}" class="active">Katalog</a>
        <a href="{{ route('konsultasi-konservator') }}">Jasa Konservator</a>
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

  <script src="{{ asset('js/katalog.js') }}"></script>
</body>
</html>
