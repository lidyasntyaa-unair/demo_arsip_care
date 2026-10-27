<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital NDA & Kerahasiaan - Arsip Care</title>
  <link rel="stylesheet" href="{{ asset('css/nda.css') }}">
</head>
<body>

  <!-- Pop-Up Modal NDA -->
  <div class="nda-modal-card">

    <!-- Tombol Close (Silang) -->
    <a href="{{ url('/asesmen') }}" class="btn-close-modal" title="Tutup">&times;</a>

    <span class="badge-iso">PROTOKOL ISO 11799 / 27001</span>
    <h2 class="modal-title">Jaminan Kerahasiaan Dokumen & Digital NDA</h2>

    <div class="nda-terms-box">
      <p><strong>PASAL 1 (DEFINISI RAHASIA):</strong> Seluruh data citra dokumen, metadata, nama subjek hukum, stempel, dan segel yang diunggah diklasifikasikan sebagai Informasi Rahasia Berderajat Vital.</p>
      <p><strong>PASAL 2 (KEWAJIBAN PEMPURIFIKASI):</strong> Arsip Care berkomitmen menerapkan enkripsi end-to-end 256-bit dan menghapus berkas sementara dalam jangka waktu maksimal 7 hari kerja.</p>
      <p><strong>PASAL 3 (HAK CIPTA & KEPEMILIKAN):</strong> Pengunggahan berkas tidak mengalihkan hak cipta atau kepemilikan fisik/digital dokumen dari pemilik sah kepada pihak platform.</p>
    </div>

    <!-- Checkbox Persetujuan -->
    <div class="nda-checkbox-card">
      <label class="nda-checkbox-label">
        <input type="checkbox" id="ndaCheckbox" onchange="toggleNdaButton()">
        <span>Saya menyetujui secara sadar seluruh Ketentuan Privasi & Digital NDA Arsip Care.</span>
      </label>
    </div>

    <!-- Tombol Aksi -->
    <div class="modal-actions">
      <a href="{{ url('/asesmen') }}" class="btn-cancel">Batalkan</a>

      <!-- Tombol Terkunci Secara Default (disabled) -->
      <button type="button" id="btnSubmitNda" class="btn-submit-nda" disabled onclick="submitNda()">
        Saya Menyetujui & Lanjutkan Unggah
      </button>
    </div>

  </div>

  <script src="{{ asset('js/nda.js') }}"></script>
</body>
</html>
