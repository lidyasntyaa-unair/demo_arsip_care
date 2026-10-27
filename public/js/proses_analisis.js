document.addEventListener('DOMContentLoaded', () => {
  const imgElement = document.getElementById('scannedDocumentImage');
  const dossierTitle = document.getElementById('dossierTitle');

  // Ambil file spesimen gambar yang diunggah dari localStorage
  const userImage = localStorage.getItem('uploadedImageSrc');
  const userFileName = localStorage.getItem('uploadedFileName');

  if (userImage && userImage.trim() !== "") {
    imgElement.src = userImage;
  } else {
    // Fallback default jika diakses tanpa upload
    imgElement.src = '/images/foto 1 hal 4.png';
  }

  if (userFileName) {
    dossierTitle.innerText = '📁 Dossier Pemeriksaan: ' + userFileName;
  }

  // Animasi Progres Alami (Simulasi Pindaian 4 Detik)
  let progress = 0;
  const progressBar = document.getElementById('progressBar');
  const progressText = document.getElementById('progressText');
  const etaText = document.getElementById('etaText');

  const step1 = document.getElementById('step1');
  const step2 = document.getElementById('step2');
  const step3 = document.getElementById('step3');

  const interval = setInterval(() => {
    progress += 2;
    if (progress > 100) progress = 100;

    if (progressBar) {
      progressBar.style.width = progress + '%';
    }

    if (progress < 40) {
      if (progressText) progressText.innerText = progress + '% — Menganalisis Degradasi Selulosa...';
      if (etaText) etaText.innerText = 'ETA: ~3 Detik';
      if (step1) {
        step1.style.color = '#34AC98';
        step1.innerHTML = '🟢 Selesai: Dekompilasi berkas resolusi tinggi & verifikasi tanda tangan digital.';
      }
    } else if (progress < 80) {
      if (progressText) progressText.innerText = progress + '% — Mengukur Kadar Keasaman (pH) & Spora Jamur...';
      if (etaText) etaText.innerText = 'ETA: ~1 Detik';
      if (step2) {
        step2.style.color = '#34AC98';
        step2.innerHTML = '🟢 Selesai: Mendeteksi tingkat kerapuhan serat kertas dan diskolorasi pigmentasi.';
      }
    } else {
      if (progressText) progressText.innerText = progress + '% — Memetakan Rekomendasi Restorasi Presisi...';
      if (etaText) etaText.innerText = 'ETA: ~0 Detik';
      if (step3) {
        step3.style.color = '#34AC98';
        step3.innerHTML = '🟢 Selesai: Pencocokan ke basis data SOP restorasi ANRI & UGM.';
      }
    }

    if (progress >= 100) {
      clearInterval(interval);
      setTimeout(() => {
        window.location.href = '/hasil-diagnosa';
      }, 500);
    }
  }, 80);
});
