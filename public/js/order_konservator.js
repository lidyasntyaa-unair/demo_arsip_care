document.addEventListener('DOMContentLoaded', function () {
    const btnPrint = document.querySelector('.btn-print-pdf');
    if (btnPrint) {
        btnPrint.addEventListener('click', function () {
            window.print();
        });
    }
});
