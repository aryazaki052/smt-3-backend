const navbar = document.querySelector('.navbar');
const scrollThreshold = 200; // Jarak scroll saat navbar berubah warna

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY || window.pageYOffset;

  if (scrollPosition > scrollThreshold) {
    navbar.classList.remove('navbar-transparent');
    navbar.classList.add('navbar-white');
  } else {
    navbar.classList.remove('navbar-white');
    navbar.classList.add('navbar-transparent');
  }
});