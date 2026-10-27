document.addEventListener('DOMContentLoaded', () => {
  // Highlight tautan navigasi aktif berdasarkan URL saat ini
  const currentPath = window.location.pathname;
  const navLinks = document.querySelectorAll('.nav-links a');

  navLinks.forEach(link => {
    if (link.getAttribute('href') === currentPath) {
      link.classList.add('active');
    }
  });

  // Smooth scroll untuk jangkar halaman jika ada
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
});
