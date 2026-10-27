function triggerFileSelect(slotId) {
  document.getElementById('input-file-' + slotId).click();
}

function handleImageUpload(event, slotId) {
  const file = event.target.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(e) {
      document.getElementById('img-preview-' + slotId).src = e.target.result;
      document.getElementById('empty-' + slotId).style.display = 'none';
      document.getElementById('preview-' + slotId).style.display = 'block';
      document.getElementById('box-' + slotId).classList.add('has-file');
    };
    reader.readAsDataURL(file);
  }
}

function removeImage(event, slotId) {
  event.stopPropagation();
  document.getElementById('input-file-' + slotId).value = '';
  document.getElementById('img-preview-' + slotId).src = '';
  document.getElementById('preview-' + slotId).style.display = 'none';
  document.getElementById('empty-' + slotId).style.display = 'flex';
  document.getElementById('box-' + slotId).classList.remove('has-file');
}

function submitForm() {
  const form = document.getElementById('conservatorForm');
  const chk = document.getElementById('chkAgreement');

  if (!form.checkValidity()) {
    form.reportValidity();
    return;
  }

  if (!chk.checked) {
    alert("Mohon centang persetujuan informasi sebelum melanjutkan.");
    return;
  }

  form.submit();
}

document.addEventListener('DOMContentLoaded', function() {
  const radioCards = document.querySelectorAll('.radio-card');
  radioCards.forEach(card => {
    card.addEventListener('click', function() {
      radioCards.forEach(c => c.classList.remove('active'));
      this.classList.add('active');
      const radio = this.querySelector('input[type="radio"]');
      if (radio) {
        radio.checked = true;
      }
    });
  });
});
