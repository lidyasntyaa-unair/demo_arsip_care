function handleFileSelect(event) {
  const file = event.target.files[0];
  if (file) {
    const fileName = file.name;
    const fileSize = (file.size / (1024 * 1024)).toFixed(1) + ' MB';

    localStorage.setItem('uploadedFileName', fileName);
    localStorage.setItem('uploadedFileSize', fileSize);

    const reader = new FileReader();
    reader.onload = function(e) {
      localStorage.setItem('uploadedImageSrc', e.target.result);
      document.getElementById('fileNameDisplay').innerText = fileName;
      document.getElementById('fileSizeDisplay').innerText = fileSize + ' • Status: Siap Dianalisis Algoritma';
      document.getElementById('fileStatusContainer').style.display = 'flex';
    };
    reader.readAsDataURL(file);
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const btnSubmit = document.querySelector('.btn-submit-main');
  if (btnSubmit) {
    btnSubmit.addEventListener('click', function(e) {
      // 1. Simpan Pilihan Jenis Dokumen & Tahun
      const docTypeSelect = document.querySelector('select.form-control');
      const docType = docTypeSelect && docTypeSelect.selectedIndex !== -1
        ? docTypeSelect.options[docTypeSelect.selectedIndex].text
        : 'Dokumen Vital Pribadi';
      const docYearInput = document.querySelector('input[type="number"]');
      const docYear = docYearInput && docYearInput.value ? docYearInput.value : '1998';

      localStorage.setItem('docType', docType);
      localStorage.setItem('docYear', docYear);

      // 2. Simpan Checklist Gejala Kerusakan
      const checkedGejala = [];
      document.querySelectorAll('.checkbox-grid input[type="checkbox"]:checked').forEach(cb => {
        const titleElem = cb.closest('.checkbox-card').querySelector('.checkbox-title');
        if (titleElem) {
          checkedGejala.push(titleElem.innerText.trim());
        }
      });
      localStorage.setItem('checkedGejala', JSON.stringify(checkedGejala));
    });
  }
});
