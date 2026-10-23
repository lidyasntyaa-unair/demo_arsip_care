<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital NDA & Kerahasian - Arsip Care</title>
  <link rel="stylesheet" href="nda.css">
  <style>
    /* Styling Tombol Saat Terkunci (Disabled) */
    .btn-submit-nda:disabled {
      background-color: #94A3B8 !important;
      cursor: not-allowed;
      opacity: 0.7;
      box-shadow: none !important;
    }
  </style>
</head>
<body style="background-color: #64748B; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0;">

  <!-- Pop-Up Modal NDA -->
  <div style="background: #FFFFFF; border-radius: 1rem; width: 90%; max-width: 580px; padding: 2rem; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.3); position: relative;">
    
    <!-- Tombol Close (Silang) -->
    <a href="../asesman/asesman.php" style="position: absolute; top: 1.25rem; right: 1.25rem; text-decoration: none; color: #94A3B8; font-size: 1.25rem; font-weight: bold;">&times;</a>

    <span style="font-size: 0.65rem; font-weight: 800; color: #34AC98; background: #E6F7F4; padding: 0.2rem 0.5rem; border-radius: 0.25rem; letter-spacing: 0.05em;">PROTOKOL ISO 11799 / 27001</span>
    <h2 style="font-size: 1.125rem; font-weight: 800; color: #0B2240; margin-top: 0.5rem; margin-bottom: 1rem;">Jaminan Kerahasiaan Dokumen & Digital NDA</h2>

    <div style="background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 0.75rem; padding: 1rem; font-size: 0.725rem; color: #475569; max-height: 180px; overflow-y: auto; line-height: 1.5; margin-bottom: 1.25rem;">
      <p style="margin-bottom: 0.5rem;"><strong>PASAL 1 (DEFINISI RAHASIA):</strong> Seluruh data citra dokumen, metadata, nama subjek hukum, stempel, dan segel yang diunggah diklasifikasikan sebagai Informasi Rahasia Berderajat Vital.</p>
      <p style="margin-bottom: 0.5rem;"><strong>PASAL 2 (KEWAJIBAN PEMPURIFIKASI):</strong> Arsip Care berkomitmen menerapkan enkripsi end-to-end 256-bit dan menghapus berkas sementara dalam jangka waktu maksimal 7 hari kerja.</p>
      <p><strong>PASAL 3 (HAK CIPTA & KEPEMILIKAN):</strong> Pengunggahan berkas tidak mengalihkan hak cipta atau kepemilikan fisik/digital dokumen dari pemilik sah kepada pihak platform.</p>
    </div>

    <!-- Checkbox Tidak Tercentang di Awal (Tanpa atribut checked) -->
    <div style="background-color: #ECFDF5; border: 1px solid #A7F3D0; padding: 0.85rem; border-radius: 0.65rem; margin-bottom: 1.5rem;">
      <label style="display: flex; align-items: flex-start; gap: 0.65rem; cursor: pointer; font-size: 0.775rem; color: #0B2240; font-weight: 600;">
        <input type="checkbox" id="ndaCheckbox" style="margin-top: 0.15rem; accent-color: #34AC98; width: 1rem; height: 1rem;" onchange="toggleNdaButton()">
        <span>Saya menyetujui secara sadar seluruh Ketentuan Privasi & Digital NDA Arsip Care.</span>
      </label>
    </div>

    <!-- Tombol Aksi -->
    <div style="display: flex; align-items: center; justify-content: space-between;">
      <a href="../asesman/asesman.php" style="font-size: 0.775rem; color: #64748B; text-decoration: none; font-weight: 600;">Batalkan</a>
      
      <!-- Tombol Terkunci Secara Default (disabled) -->
      <button type="button" id="btnSubmitNda" class="btn-submit-nda" disabled onclick="submitNda()" style="background-color: #34AC98; color: #FFFFFF; font-weight: 800; font-size: 0.85rem; border: none; padding: 0.75rem 1.25rem; border-radius: 0.5rem;">
        Saya Menyetujui & Lanjutkan Unggah
      </button>
    </div>

  </div>

  <!-- JavaScript Interaktif -->
  <script>
    function toggleNdaButton() {
      const checkbox = document.getElementById('ndaCheckbox');
      const btn = document.getElementById('btnSubmitNda');
      
      // Aktifkan tombol jika checkbox dicentang, kunci jika tidak
      btn.disabled = !checkbox.checked;
    }

    function submitNda() {
      const checkbox = document.getElementById('ndaCheckbox');
      if (checkbox.checked) {
        window.location.href = '../proses_analisis/proses_analisis.php';
      }
    }
  </script>

</body>
</html>