/**
 * Mengisi input percakapan dengan teks prompt preset
 * @param {string} text - Teks pertanyaan yang akan dimasukkan
 */
function fillInput(text) {
  const chatInput = document.getElementById('chatInput');
  if (chatInput) {
    chatInput.value = text;
    chatInput.focus();
  }
}

/**
 * Menampilkan badge nama file ketika dokumen diunggah
 * @param {HTMLInputElement} input - Element input type file
 */
function handleFileSelect(input) {
  const badge = document.getElementById('fileStatusBadge');
  const fileNameSpan = document.getElementById('fileNameDisplay');

  if (input.files && input.files[0]) {
    const fileName = input.files[0].name;
    if (fileNameSpan) {
      fileNameSpan.textContent = "📎 " + fileName;
    }
    if (badge) {
      badge.style.display = "inline-flex";
    }
  }
}

/**
 * Menghapus file terpilih dan menyembunyikan badge info file
 */
function removeSelectedFile() {
  const input = document.getElementById('fileExplorerInput');
  const badge = document.getElementById('fileStatusBadge');

  if (input) {
    input.value = "";
  }
  if (badge) {
    badge.style.display = "none";
  }
}

document.addEventListener('DOMContentLoaded', () => {
  // Highlight tautan navigasi aktif berdasarkan URL saat ini
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links a');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });
});
