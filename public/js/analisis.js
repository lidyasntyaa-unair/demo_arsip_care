document.addEventListener('DOMContentLoaded', () => {
  // Highlight tautan navigasi aktif berdasarkan URL saat ini
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links a');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });

  // Tampilkan nama file dari localStorage jika ada
  const savedName = localStorage.getItem('uploadedFileName');
  const savedSize = localStorage.getItem('uploadedFileSize');

  const fileNameDisplay = document.getElementById('fileNameDisplay');
  const fileSizeDisplay = document.getElementById('fileSizeDisplay');

  if (savedName && fileNameDisplay) {
    fileNameDisplay.innerText = savedName;
  }
  if (savedSize && fileSizeDisplay) {
    fileSizeDisplay.innerText = `${savedSize} • Status: Siap Dianalisis Algoritma`;
  }
});

/**
 * Memproses perubahan berkas yang dipilih pengguna
 * @param {Event} event - Peristiwa perubahan input file
 */
function handleFileChange(event) {
  const file = event.target.files[0];
  if (file) {
    const sizeMb = (file.size / (1024 * 1024)).toFixed(1) + ' MB';

    const fileNameDisplay = document.getElementById('fileNameDisplay');
    const fileSizeDisplay = document.getElementById('fileSizeDisplay');

    if (fileNameDisplay) {
      fileNameDisplay.innerText = file.name;
    }
    if (fileSizeDisplay) {
      fileSizeDisplay.innerText = `${sizeMb} • Status: Siap Dianalisis Algoritma`;
    }

    localStorage.setItem('uploadedFileName', file.name);
    localStorage.setItem('uploadedFileSize', sizeMb);
  }
}
