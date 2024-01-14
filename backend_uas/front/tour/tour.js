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



// slider image
var carouselIndex = 0;
var images = document.querySelectorAll(".carousel img");
var indicators = document.querySelectorAll(".carousel-indicators span");

carousel();

function carousel() {
  for (var i = 0; i < images.length; i++) {
    images[i].classList.remove("active");
    images[i].style.opacity = 0;
  }
  for (var i = 0; i < indicators.length; i++) {
    indicators[i].classList.remove("active");
  }

  carouselIndex++;
  if (carouselIndex > images.length) {
    carouselIndex = 1;
  }

  images[carouselIndex - 1].classList.add("active");
  images[carouselIndex - 1].style.opacity = 1;
  indicators[carouselIndex - 1].classList.add("active");

  setTimeout(carousel, 5000); // Ubah gambar setiap 3 detik
}

function jumpToSlide(slideIndex) {
  carouselIndex = slideIndex;
  carousel();
}