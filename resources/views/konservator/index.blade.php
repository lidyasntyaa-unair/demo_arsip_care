<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pakar Konservator - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <style>
    .konservator-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem; }
    .konservator-card { background: #fff; border: 1px solid #E2E8F0; border-radius: 0.75rem; padding: 1.5rem; text-align: center; }
    .konservator-avatar { width: 70px; height: 70px; background: #E6F7F4; color: #34AC98; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; font-weight: bold; margin: 0 auto 1rem auto; }
    .btn-wa { display: inline-block; background: #25D366; color: #fff; text-decoration: none; padding: 0.6rem 1rem; border-radius: 0.5rem; font-weight: bold; font-size: 0.8rem; margin-top: 1rem; }
  </style>
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
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ url('/asesmen') }}">Konsultasi</a>
        <a href="{{ url('/katalog') }}">Katalog</a>
        <a href="{{ route('konservator.index') }}" class="active">Jasa Konservator</a>
      </div>
    </div>
  </nav>

  <main class="container" style="padding: 3rem 1.5rem;">
    <div style="text-align: center; max-width: 600px; margin: 0 auto;">
      <span class="badge-tag">TIM KURATOR TERAKREDITASI</span>
      <h1 class="section-title">Daftar Pakar Konservator Laboratorium</h1>
      <p class="section-subtitle">Pakar restorasi fisik terlisensi untuk penanganan berkas vital berderajat hukum tinggi.</p>
    </div>

    <div class="konservator-grid">
      @forelse ($konservators as $k)
        @php
          $waMsg = rawurlencode("Halo Bpk/Ibu " . $k->name . ", saya ingin berkonsultasi mengenai restorasi dokumen.");
          $waUrl = "https://wa.me/" . preg_replace('/[^0-9]/', '', $k->no_hp ?? '6285718192720') . "?text=" . $waMsg;
        @endphp
        <div class="konservator-card">
          <div class="konservator-avatar">
            {{ strtoupper(substr($k->name, 0, 2)) }}
          </div>
          <h3 style="font-size: 1.1rem; color: #0B2240;">{{ $k->name }}</h3>
          <span style="font-size: 0.75rem; color: #34AC98; font-weight: bold; display: block; margin-top: 0.25rem;">
            {{ $k->spesialisasi ?? 'Pakar Restorasi Dokumen Kertas' }}
          </span>
          <p style="font-size: 0.75rem; color: #64748B; margin-top: 0.5rem;">
            Standar Akreditasi Kearsipan ANRI & ISO 11799
          </p>

          <a href="{{ $waUrl }}" target="_blank" class="btn-wa">
            💬 Konsultasi via WhatsApp
          </a>
        </div>
      @empty
        <div style="grid-column: 1 / -1; text-align: center; color: #64748B; padding: 3rem;">
          Belum ada pakar konservator terdaftar saat ini.
        </div>
      @endforelse
    </div>
  </main>

</body>
</html>
