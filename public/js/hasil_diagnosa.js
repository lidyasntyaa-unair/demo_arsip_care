document.addEventListener('DOMContentLoaded', () => {
  // Highlight tautan navigasi aktif berdasarkan URL
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links a');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });

  // Load data diagnosis dari localStorage
  const userFileName = localStorage.getItem('uploadedFileName') || 'Dokumen_Pribadi.jpg';
  const docType = localStorage.getItem('docType') || 'Dokumen Resmi Kependudukan / Aset';
  const docYear = localStorage.getItem('docYear') || '1998';
  const checkedGejala = JSON.parse(localStorage.getItem('checkedGejala') || '[]');

  const docReportTitle = document.getElementById('docReportTitle');
  const docCategoryDisplay = document.getElementById('docCategoryDisplay');

  if (docReportTitle) {
    const cleanFileName = userFileName.replace(/\.[^/.]+$/, "");
    docReportTitle.innerText = `Hasil Diagnosa Dokumen: ${cleanFileName} (${docYear})`;
  }

  if (docCategoryDisplay) {
    docCategoryDisplay.innerText = docType;
  }

  // Element Rekomendasi DIY Kit
  const diyKitName = document.getElementById('diyKitName');
  const diyKitDesc = document.getElementById('diyKitDesc');
  const diyKitPrice = document.getElementById('diyKitPrice');
  const btnBuyDiyShopee = document.getElementById('btnBuyDiyShopee');

  // Logika Penentuan Rekomendasi Produk Shopee Spesifik berdasarkan Gejala Kerusakan
  if (checkedGejala.some(g => g.includes('Menguning') || g.includes('Asam'))) {
    if (diyKitName) diyKitName.innerText = "DIY Repair-kit Deasidifikasi Platinum";
    if (diyKitDesc) diyKitDesc.innerText = "Botol Spray + Bubuk Magnesium Karbonat + pH Meter + Reagen Neutralizer";
    if (diyKitPrice) diyKitPrice.innerText = "Rp 3.557.660";
    if (btnBuyDiyShopee) btnBuyDiyShopee.href = "https://shopee.co.id/shop/1932803940";
  } else if (checkedGejala.some(g => g.includes('Robek') || g.includes('Berlubang') || g.includes('Rayap'))) {
    if (diyKitName) diyKitName.innerText = "DIY Repair-kit Penambalan Platinum";
    if (diyKitDesc) diyKitDesc.innerText = "Kertas Tisu Jepang + Serbuk CMC + Kuas Hake + Cutting Mat & Roller";
    if (diyKitPrice) diyKitPrice.innerText = "Rp 1.115.817";
    if (btnBuyDiyShopee) btnBuyDiyShopee.href = "https://shopee.co.id/shop/1932803940";
  } else if (checkedGejala.some(g => g.includes('Basah') || g.includes('Banjir') || g.includes('Jamur'))) {
    if (diyKitName) diyKitName.innerText = "DIY Repair-kit Laminasi Platinum";
    if (diyKitDesc) diyKitDesc.innerText = "Penyerap Kelembapan + Etanol Pelarut Spora + Alat Pres & Enclosure";
    if (diyKitPrice) diyKitPrice.innerText = "Rp 20.803.946";
    if (btnBuyDiyShopee) btnBuyDiyShopee.href = "https://shopee.co.id/DIY-Repair-kit-Laminasi-Platinum-i.1932803940.44669261877";
  } else {
    // Default Penambalan Standar
    if (diyKitName) diyKitName.innerText = "DIY Repair-kit Penambalan Standar";
    if (diyKitDesc) diyKitDesc.innerText = "Kertas Tisu Jepang + Lem Metil Selulosa + Folder Enkapsulasi Mylar A4";
    if (diyKitPrice) diyKitPrice.innerText = "Rp 85.000";
    if (btnBuyDiyShopee) btnBuyDiyShopee.href = "https://shopee.co.id/shop/1932803940";
  }
});
