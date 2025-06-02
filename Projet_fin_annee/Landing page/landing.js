var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".mySwiper-pagination", // Pagination spécifique
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var swiper1 = new Swiper(".mySwiper1", {
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  pagination: {
    el: ".mySwiper1-pagination", // Pagination spécifique
    clickable: true,
  },
});