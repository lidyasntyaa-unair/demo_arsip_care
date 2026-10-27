<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arsip Care - Pertolongan Pertama & Perlindungan Dokumen Berharga</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

  <!-- Navbar -->
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
        <a href="{{ url('/index') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a>
        <a href="{{ url('/asesmen') }}" class="{{ request()->is('asesmen*') ? 'active' : '' }}">Konsultasi</a>
        <a href="{{ url('/katalog') }}" class="{{ request()->is('katalog*') ? 'active' : '' }}">Katalog</a>
        <a href="{{ url('/konsultasi-konservator') }}" class="{{ request()->is('konservator*') ? 'active' : '' }}">Jasa Konservator</a>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" style="background: none; border: none; color: #EF4444; font-weight: bold; cursor: pointer; padding: 0;">
        🚪 Keluar (Logout)
    </button>
</form>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <span class="badge-tag">LABORATORIUM RESTORASI PRESISI NO. 1</span>
        <h1 class="hero-title">Pertolongan Pertama dan Perlindungan Dokumen Berharga Anda</h1>
        <p class="hero-desc">Solusi digital pertama di Indonesia untuk asesmen kerusakan arsip berbasis chatbot, kit restorasi mandiri standar lab, dan layanan konservasi fisik.</p>
        <a href="{{ url('/asesmen') }}" class="btn-primary">Mulai Konsultasi Dokumen Gratis &rarr;</a>

        <div class="stats-grid">
          <div>
            <span class="stat-val">&lt; 3 Menit</span>
            <span class="stat-lbl">Diagnosis Kerusakan Fisik</span>
          </div>
          <div>
            <span class="stat-val">pH 7.8</span>
            <span class="stat-lbl">Target Netralitas Deasidifikasi</span>
          </div>
          <div>
            <span class="stat-val">100%</span>
            <span class="stat-lbl">Prosedur Reversibel (ISO 11799)</span>
          </div>
        </div>
      </div>

      <div class="hero-img-wrapper">
        <img src="{{ asset('images/foto 1 hal 1.jpg') }}" alt="Preservasi Dokumen Berharga" class="hero-img">
        <div class="floating-card">
          <div class="floating-circle">98%</div>
          <div>
            <strong style="font-size: 0.8rem; display: block; color: var(--primary-dark);">Dokumen Terlindungi: 98.4%</strong>
            <span style="font-size: 0.7rem; color: var(--slate-600);">Tingkat Ketahanan Asam & Jamur</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Studi Kasus Forensik -->
  <section class="restorasi-section">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">STUDI KASUS FORENSIK</span>
        <h2 class="section-title">Bukti Restorasi: Dari Rusak Kritis Menjadi Lestari</h2>
        <p class="section-subtitle">Metode intervensi laboratorium berbasis prinsip konservasi minimal. Mengembalikan integritas fisik tanpa merusak legalitas tinta otentik.</p>
      </div>

      <div class="ba-grid">
        <div class="ba-card">
          <img src="{{ asset('images/foto 2.1 hal 1.jpg') }}" alt="Kondisi Awal Dokumen">
          <div class="ba-card-body">
            <span class="badge-label-red">KONDISI AWAL (FISIK)</span>
            <h4 style="font-size: 0.95rem; margin-top: 0.5rem; color: var(--primary-dark);">Akta Tanah Kolonial 1970</h4>
            <p style="font-size: 0.8rem; color: var(--slate-600); margin-top: 0.25rem;">Tingkat Keasaman pH 4.2 • Robekan Marginal 45%</p>
          </div>
        </div>

        <div class="ba-card">
          <img src="{{ asset('images/foto 2.2 hal 1.jpg') }}" alt="Pasca Konservasi Fisik">
          <div class="ba-card-body">
            <span class="badge-label-teal">PASCA KONSERVASI LAB</span>
            <h4 style="font-size: 0.95rem; margin-top: 0.5rem; color: var(--primary-dark);">Lab Tested: #ARK-7829</h4>
            <p style="font-size: 0.8rem; color: var(--slate-600); margin-top: 0.25rem;">pH Netral Terstabilkan: 7.8 • Enkapsulasi Mylar 75 Micron</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Edukasi: Mengapa Bukan Laminasi Panas? -->
  <section class="comparison-section">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag text-danger">PERINGATAN KEARSIPAN NASIONAL</span>
        <h2 class="section-title">Mengapa Bukan Laminasi Panas?</h2>
        <p class="section-subtitle">Banyak pemilik dokumen tidak menyadari bahwa mesin laminasi panas di toko fotokopi adalah penyebab utama hilangnya nilai hukum dan kehancuran fisik dokumen.</p>
      </div>

      <div class="comp-grid">
        <div class="comp-card bad">
          <span class="badge-label-red">LAMINASI PLASTIK PANAS (FATAL)</span>
          <ul class="comp-list">
            <li class="comp-item">
              <span class="comp-icon text-danger">❌</span>
              <span class="comp-title">Panas Ekstrem Merusak Selulosa:</span>
              <span class="comp-desc">Suhu 120°C - 150°C mencairkan kelembapan alami kertas.</span>
            </li>
            <li class="comp-item">
              <span class="comp-icon text-danger">❌</span>
              <span class="comp-title">Perekat Melekat Permanent:</span>
              <span class="comp-desc">Polymer plastik menyatu dengan serat dokumen dan tinta.</span>
            </li>
            <li class="comp-item">
              <span class="comp-icon text-danger">❌</span>
              <span class="comp-title">Gas Asam Terperangkap:</span>
              <span class="comp-desc">Mengunci asam internal yang mempercepat pembusukan kertas.</span>
            </li>
          </ul>
        </div>

        <div class="comp-card good">
          <span class="badge-label-teal">ENKAPSULASI MYLAR POLYESTER (DIREKOMENDASIKAN)</span>
          <ul class="comp-list">
            <li class="comp-item">
              <span class="comp-icon text-teal">✅</span>
              <span class="comp-title">Nol Perekat Pada Kertas:</span>
              <span class="comp-desc">100% Bebas Lem, dokumen melayang di dalam kantong pelindung.</span>
            </li>
            <li class="comp-item">
              <span class="comp-icon text-teal">✅</span>
              <span class="comp-title">Prinsip Mutlak Reversibilitas:</span>
              <span class="comp-desc">Dapat dibuka kembali kapan saja tanpa merusak kertas.</span>
            </li>
            <li class="comp-item">
              <span class="comp-icon text-teal">✅</span>
              <span class="comp-title">Daya Tahan Lebih dari 100 Tahun:</span>
              <span class="comp-desc">Proteksi UV & Kelembapan Standar Arsip Nasional.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Dua Jalur Preservasi -->
  <section class="paths-section">
    <div class="container">
      <div class="section-header">
        <span class="badge-tag">DUA JALUR PRESERVASI</span>
        <h2 class="section-title">Pilih Pendekatan Perawatan Dokumen Anda</h2>
      </div>

      <div class="paths-grid">
        <div class="path-card">
          <img src="{{ asset('images/foto 3.1 hal 1.jpg') }}" alt="DIY Archival Kit">
          <div class="path-card-body">
            <h3 style="font-size: 1.1rem; color: var(--primary-dark);">DIY Archival Preservation Kit</h3>
            <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 0.5rem;">Paket formulasi laboratorium untuk penanganan cepat, pembersihan ringan, dan enkapsulasi mandiri.</p>
            <a href="{{ url('/katalog') }}" class="btn-primary" style="margin-top: 1.25rem;">Jelajahi Katalog DIY Kit &rarr;</a>
          </div>
        </div>

        <div class="path-card">
          <img src="{{ asset('images/foto 3.2 hal 1.jpg') }}" alt="Konservasi Fisik & Restorasi Lab">
          <div class="path-card-body">
            <h3 style="font-size: 1.1rem; color: var(--primary-dark);">Konservasi Fisik & Restorasi Lab</h3>
            <p style="font-size: 0.85rem; color: var(--slate-600); margin-top: 0.5rem;">Tindakan restorasi kuratorial intensif untuk dokumen yang rusak parah, tersemat rapuh, atau rapuh bencana.</p>
            <a href="{{ url('/konservator') }}" class="btn-primary" style="margin-top: 1.25rem; background: var(--primary-dark);">Booking Layanan Lab &rarr;</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA Banner -->
  <div class="container">
    <div class="bottom-banner">
      <div>
        <span class="badge-tag">ALGORITMA VISUAL KOMPUTER KEARSIPAN</span>
        <h3 style="font-size: 1.35rem; font-weight: 800; margin-top: 0.25rem;">Belum Yakin Tingkat Kerusakan
