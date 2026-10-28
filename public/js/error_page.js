// Fungsi untuk kembali ke halaman sebelumnya
function goBack() {
    if (window.history.length > 1) {
        window.history.back();
    } else {
        window.location.href = "/";
    }
}


// Efek interaktif ringan saat mouse bergerak
document.addEventListener('DOMContentLoaded', () => {
    const errorCode = document.getElementById('errorCode');

    document.addEventListener('mousemove', (e) => {
        const xAxis = (window.innerWidth / 2 - e.pageX) / 45;
        const yAxis = (window.innerHeight / 2 - e.pageY) / 45;

        if (errorCode) {
            errorCode.style.transform = `translate(${xAxis}px, ${yAxis}px)`;
        }
    });
});
