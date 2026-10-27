document.addEventListener('DOMContentLoaded', function () {
    const products = [
      { name: "DIY Repair-kit Penambalan Standar", price: "Rp 2.834.220", img: "DIY Repair Kit Penambalan Standar.jpg", link: "https://id.shp.ee/Sqoj7iDu" },
      { name: "DIY Repair-kit Penambalan Platinum", price: "Rp 1.415.867", img: "DIY Repair Kit Penambalan Platinum 2.jpg", link: "https://id.shp.ee/uGkvsTaw" },
      { name: "DIY Repair-kit Laminasi Standar", price: "Rp 12.244.621", img: "DIY Repair Kit Laminasi Standar.jpg", link: "https://id.shp.ee/X1hj8TRJ" },
      { name: "DIY Repair-kit Laminasi Platinum", price: "Rp 20.803.946", img: "DIY Repair Kit Laminasi Platinum.jpg", link: "https://id.shp.ee/EnpxBKGq" },
      { name: "DIY Repair-kit Deasidifikasi Standar", price: "Rp 2.409.220", img: "DIY Repair Kit Deasidifikasi Standar.jpg", link: "https://id.shp.ee/gDhviCEm" },
      { name: "DIY Repair-kit Deasidifikasi Platinum", price: "Rp 3.557.660", img: "DIY Repair Kit Deasidifikasi Platinum.jpg", link: "https://id.shp.ee/EWPHSTE" },
      { name: "DIY Repair-kit Penjilidan Standar", price: "Rp 87.495", img: "DIY Repair Kit Penjilidan Standar.jpg", link: "https://id.shp.ee/QLnJYt5N" },
      { name: "DIY Repair-kit Penjilidan Platinum", price: "Rp 137.455", img: "DIY Repair Kit Penjilidan Platinum.jpg", link: "https://id.shp.ee/PDeZ8MpX" },
      { name: "Paket Standar Enkapsulasi", price: "Rp 40.000", img: "Paket Standar Enkapsulasi.jpg", link: "https://id.shp.ee/vtk8WDo3" },
      { name: "Paket Platinum Enkapsulasi", price: "Rp 446.949", img: "Paket Platinum Enkapsulasi.jpg", link: "https://id.shp.ee/2fmohTuT" },
      { name: "Kertas Tisu Jepang Tengujo 9gsm", price: "Rp 12.099.000", img: "Tisu Jepang.jpg", link: "https://id.shp.ee/GVz433oj" },
      { name: "Serbuk Perekat Metil Selulosa (CMC)", price: "Rp 1.700.000", img: "Bubuk CMC 1 Kg.jpg", link: "https://id.shp.ee/VqkYxDzg" },
      { name: "Folder Enkapsulasi Polyester Mylar A4", price: "Rp 205.178", img: "Polyester A4.jpg", link: "https://id.shp.ee/2aXm4rXb" },
      { name: "Kuas Hake Bulu Domba Restorasi", price: "Rp 10.710", img: "Kuas.jpg", link: "https://id.shp.ee/Th3R6cUQ" },
      { name: "E-Modul Panduan Mandiri Restorasi", price: "Rp 43.890", img: "Flashdisk Sandisk.jpg", link: "https://id.shp.ee/crXsiBNt" },
      { name: "Botol Spray Preservasi Kearsipan", price: "Rp 30.000", img: "Botol spray.jpg", link: "https://id.shp.ee/YXa4trEk" },
      { name: "Bubuk Magnesium Karbonat Deasidifikasi", price: "Rp 1.912.680", img: "Bubuk Magnesium Karbonat.jpg", link: "https://id.shp.ee/qsTUzTaW" },
      { name: "Cutting Mat Alas Potong Presisi", price: "Rp 139.860", img: "Cutting mat.jpg", link: "https://id.shp.ee/h62SpwQs" },
      { name: "Double Tape Bebas Asam (Acid-Free)", price: "Rp 9.832", img: "Double tape.jpg", link: "https://id.shp.ee/rXJhKmJY" },
      { name: "Etanol 98% Murni Pelarut Spora", price: "Rp 738.000", img: "Etanol 98%.jpg", link: "https://id.shp.ee/7D2Vqg1M" },
      { name: "Filmoplast P90 Tape Restorasi", price: "Rp 1.400.000", img: "Filmoplast.jpg", link: "https://id.shp.ee/6YK4jZm2" },
      { name: "Gunting Presisi Kertas Arsip", price: "Rp 15.867", img: "Gunting Joyko.jpg", link: "https://id.shp.ee/SsFmAoGj" },
      { name: "Gunting Biasa Kearsipan", price: "Rp 7.500", img: "Gunting Biasa.jpg", link: "https://id.shp.ee/FUSGHrpa" },
      { name: "Jarum Jahit Jilid Buku Kuno", price: "Rp 7.275", img: "Jarum.jpg", link: "https://id.shp.ee/4KRCfBEd" },
      { name: "Kain Linen Preservasi Sampul", price: "Rp 18.112", img: "Kain Linen.jpg", link: "https://id.shp.ee/BnoE3dfA" },
      { name: "Kapur Barus Anti Jamur & Serangga", price: "Rp 15.208", img: "Kapur barus.jpg", link: "https://id.shp.ee/n3yZJidF" },
      { name: "Kertas Karton Bebas Asam 3mm", price: "Rp 16.894", img: "Kertas Karton Tebal 3ml Uk A4.jpg", link: "https://id.shp.ee/xECobVVB" },
      { name: "AquaScience Aquadest Air Murni 5L", price: "Rp 496.540", img: "Aquades.jpg", link: "https://id.shp.ee/NVrbGwfx" },
      { name: "Alat Press Kayu Restorasi Manual", price: "Rp 163.885", img: "Alat pres.jpg", link: "https://id.shp.ee/WcyzcRhx" },
      { name: "Alat Fumigasi Mandiri", price: "Rp 302.770", img: "Alat Fumigasi Mandiri.jpg", link: "https://id.shp.ee/gPeAoDTB" },
      { name: "Amplop Bebas Asam Pelindung Dokumen", price: "Rp 10.531", img: "Amplop Bebas Asam.jpg", link: "https://id.shp.ee/RMBmqi36" },
      { name: "Benang Jeans Kuat Jilid Dokumen", price: "Rp 16.468", img: "Benang jeans.jpg", link: "https://id.shp.ee/hRLzgGWM" },
      { name: "Benang Wol Jilid Portepel", price: "Rp 9.000", img: "Benang wol.jpg", link: "https://id.shp.ee/nv9YusoG" },
      { name: "Boks Arsip Bebas Asam Standar ANRI", price: "Rp 11.870", img: "Boks arsip.jpg", link: "https://id.shp.ee/nLizmePL" },
      { name: "Guide Pembatas Berkas Arsip", price: "Rp 4.855", img: "Guide.jpg", link: "https://id.shp.ee/avkA7jyY" },
      { name: "Kertas Sampul Pelindung Luar", price: "Rp 12.650", img: "Kertas sampul.jpg", link: "https://id.shp.ee/uECpkqJj" },
      { name: "Lem Rajawali Formulasi Kearsipan", price: "Rp 19.819", img: "Lem rajawali.jpg", link: "https://id.shp.ee/ibb9qpRT" },
      { name: "Map Folder Arsip Bebas Asam", price: "Rp 5.280", img: "Map folder arsip.jpg", link: "https://id.shp.ee/v55UfG3K" },
      { name: "Map Gantung File Kearsipan", price: "Rp 9.440", img: "Map gantung.jpg", link: "https://id.shp.ee/zbjDh4Dx" },
      { name: "Masker 3 Ply Disposable Box 50 Pcs", price: "Rp 28.176", img: "Masker 3 play.jpg", link: "https://id.shp.ee/Fi6Wo5r9" },
      { name: "Penggaris Besi 40 cm Presisi", price: "Rp 12.546", img: "Penggaris Besi 40 cm.jpg", link: "https://id.shp.ee/9MTc2n9o" },
      { name: "Penggaris Besi Stainless Heavy Duty", price: "Rp 24.723", img: "Penggaris Besi Stanless.jpg", link: "https://id.shp.ee/MP2WuZdx" },
      { name: "Pisau Cutter Heavy Duty 18mm", price: "Rp 4.125", img: "Pisau Cutter 18 MM.jpg", link: "https://id.shp.ee/wwawPcYE" },
      { name: "Rakel Alat Pelapis Enkapsulasi Mylar", price: "Rp 15.441", img: "Rakel.jpg", link: "https://id.shp.ee/kFyf3Rvn" },
      { name: "Sarung Tangan Karet Latex Box 50 Pcs", price: "Rp 38.870", img: "Sarung tangan latex.jpg", link: "https://id.shp.ee/UoKYxuJp" },
      { name: "Spons Halus Pembersih Debu Kertas", price: "Rp 18.360", img: "Spons.jpg", link: "https://id.shp.ee/srdSc5c1" },
      { name: "USB 3.0 Type C Flashdisk SanDisk 32GB", price: "Rp 106.300", img: "USB 3.0 and Type C Merek HP.jpg", link: "https://id.shp.ee/SRnKggp3" }
    ];

    const grid = document.getElementById('catalogGrid');
    if (grid) {
        products.forEach(p => {
          grid.innerHTML += `
            <div class="product-card">
              <div>
                <div class="product-img-wrapper">
                  <img src="/images/${p.img}" alt="${p.name}" onerror="this.onerror=null; this.src='/images/logo arsipcare.jpg';">
                </div>
                <span class="badge-arsip">STANDAR ARSIP</span>
                <h3 class="product-title" title="${p.name}">${p.name}</h3>
                <div class="product-price">${p.price}</div>
              </div>
              <a href="${p.link}" target="_blank" class="btn-shopee">
                🛒 Beli di Shopee
              </a>
            </div>
          `;
        });
    }
});
