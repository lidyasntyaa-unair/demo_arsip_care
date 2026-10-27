/**
 * Mengubah status tombol Submit berdasarkan persetujuan Checkbox NDA
 */
function toggleNdaButton() {
  const checkbox = document.getElementById('ndaCheckbox');
  const btn = document.getElementById('btnSubmitNda');

  if (checkbox && btn) {
    btn.disabled = !checkbox.checked;
  }
}

/**
 * Mengeksekusi navigasi pengunggahan dokumen setelah persetujuan
 */
function submitNda() {
  const checkbox = document.getElementById('ndaCheckbox');
  if (checkbox && checkbox.checked) {
    window.location.href = '/proses-analisis';
  }
}
