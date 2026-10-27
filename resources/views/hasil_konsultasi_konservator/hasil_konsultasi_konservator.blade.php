<?php
  $queryText = request('q', 'Saya memiliki surat keterangan penduduk tahun 1950, namun dokumen tersebut sudah menguning, sangat rapuh dan beberapa tulisan agak pudar/kabur atau pudar. Apa yang harus saya lakukan?');
  $fileName = request('file', 'lembaran_arsip_1950_berjamur.jpg');

  $waNumber = '6285718192720';
  $waMessage = rawurlencode('Halo Pakar Arsip Care, saya ingin berkonsultasi mengenai preservasi dokumen: ' . $queryText);
  $waUrl = 'https://wa.me/' . $waNumber . '?text=' . $waMessage;

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Konsultasi Konservator - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/hasil_konsultasi_konservator.css') }}">
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

  <!-- Container Utama Aplikasi -->
  <div class="chat-app-container">

    <!-- Sidebar Kiri -->
    <aside class="sidebar">
      <button class="btn-new-chat" onclick="window.location.href='{{ url('/konservator') }}'">+ Obrolan Baru</button>

      <div class="sidebar-section">
        <span class="sidebar-title">RIWAYAT KONSULTASI</span>
        <div class="chat-history-item active">
          <strong>Penanganan Arsip Basah & Rapuh</strong>
          <small>Aktif • Baru Saja</small>
        </div>
        <div class="chat-history-item">
          <strong>Restorasi Kit Enkapsulasi</strong>
          <small>2 Hari Lalu</small>
        </div>
        <div class="chat-history-item">
          <strong>Formula Deasidifikasi pH 7</strong>
          <small>1 Minggu Lalu</small>
        </div>
      </div>
    </aside>

    <!-- Area Konten Utama -->
    <main class="chat-main-content">

      <!-- Sub-Bar Status Konservator -->
      <div class="conservator-status-bar">
        <div class="status-bar-left">
          <span class="avatar-badge">AC</span>
          <div>
            <strong class="status-title">Asisten Konservasi Arsip Care</strong>
            <span class="badge-status">Tingkat Kerusakan Kertas Surat: III</span>
            <small class="status-subtitle">Status: Dalam Evaluasi Laboratorium • Standar ISO 11799-UNAIR</small>
          </div>
        </div>
        <div class="status-bar-right">
          <a href="{{ $waUrl }}" target="_blank" class="btn-outline-sm" style="text-decoration: none; display: inline-flex; align-items: center; gap: 0.3rem;">
            💬 Hubungi Pakar
          </a>
        </div>
      </div>

      <!-- Wrapper Hasil Konsultasi -->
      <div class="consultation-result-wrapper">

        <!-- Bubble Pesan Pengguna -->
        <div class="user-chat-bubble">
          <p>{{ $queryText }}</p>

          @if (!empty($fileName))
          <div class="uploaded-file-card">
            <span class="file-icon">🖼️</span>
            <div class="file-info">
              <strong>{{ $fileName }}</strong>
              <small>Foto Berkas Terlampir • Terdeteksi Berkas Kertas Rapuh</small>
            </div>
          </div>
          @endif
        </div>

        <!-- Kartu Respons Kuratorial -->
        <div class="curatorial-response-card">

          <!-- Peringatan Risiko -->
          <div class="warning-box">
            <span class="warning-icon">⚠️</span>
            <div>
              <strong>PERINGATAN KURATORIAL: RISIKO KERUSAKAN TOTAL</strong>
              <p>Dilarang keras melakukan pembersihan basah mandiri. Lignin dapat menyebabkan serat hancur seketika menjadi abu saat diberi tekanan mekanik seperti saat diusap/digosok.</p>
            </div>
          </div>

          <!-- Diagnosa Konten -->
          <div class="diagnosis-content">
            <p>Berdasarkan pemeriksaan citra berkas naskah Anda: Kertas sangat rapuh, berwarna kecokelatan akibat reaksi asam (degradasi selulosa), serta terdapat bercak foxing/jamur. Kami merekomendasikan penanganan deasidifikasi spray netral dan enkapsulasi polyester untuk mencegah kontak udara langsung.</p>

            <ul class="recommendation-list">
              <li><strong>Tindakan DIY:</strong> Lakukan pembersihan mekanis perlahan menggunakan kuas bulu domba halus (pH-neutral). Gunakan kertas tisu Jepang (Tengujo 9gsm) dan perekat CMC jika terdapat robekan kecil.</li>
            </ul>
          </div>

          <!-- Kartu Rekomendasi Penanganan Resmi Laboratorium -->
          <div class="lab-offer-card">
            <span class="lab-badge">🔬 REKOMENDASI PENANGANAN RESMI LABORATORIUM</span>
            <h3>Konsultasikan dengan Konservator Laboratorium</h3>
            <p class="lab-description">
              Serahkan naskah berharga keluarga Anda ke tangan kurator terakreditasi ANRI di <strong>Laboratorium Kearsipan Terpadu Vokasi UNAIR</strong>. Dokumen akan menerima penanganan steril deasidifikasi vakum, penguatan serat robek dengan kertas Jepang (Japanese Tissue 9gsm), serta pelindung permanen bebas asam.
            </p>

            <!-- 3 Kartu Fitur Gratis -->
            <div class="service-features-grid">
              <div class="feature-item">
                <span class="feature-title">🔬 Spektroskopi Gratis</span>
                <small>Uji keasaman pH digital & identifikasi serat/bahan kimia sebelum restorasi.</small>
              </div>
              <div class="feature-item">
                <span class="feature-title">📋 BAST & Asuransi</span>
                <small>Berita Acara Serah Terima legal & proteksi dokumen hilang.</small>
              </div>
              <div class="feature-item">
                <span class="feature-title">🛡️ Garansi 5 Tahun</span>
                <small>Sertifikasi enkapsulasi polyester Mylar arsip inersia standar ISO 11799.</small>
              </div>
            </div>

            <!-- Tombol Pesan Jasa -->
            <div class="action-btn-wrapper">
              <a href="{{ url('/form-jasa-konservator') }}" class="btn-order-conservator">
                🛒 Pesan Jasa Konservator &rarr;
              </a>
            </div>

            <!-- Catatan Kaki Estimasi -->
            <div class="lab-footer-note">
              ⏱️ Estimasi telaah pra-restorasi &le; 24 Jam • Penjemputan ber-brankas tersedia untuk area Jawa & Bali
            </div>
          </div>

        </div>

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

  <script src="{{ asset('js/hasil_konsultasi_konservator.js') }}"></script>
</body>
</html>
