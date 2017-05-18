$(function(){

  // Initialisation menu hamburger
  $(".button-collapse").sideNav();

  // initialisation carousel
  $('.carousel').carousel({duration: 300, dist: -100, indicators: true});

  // initialisation carousel pleine largeur
  $('.carousel.carousel-slider').carousel({fullWidth: true});

  // Initialisation parallax
  $('.parallax').parallax();

  // Initialisation scrollSpy
  $('.scrollspy').scrollSpy({scrollOffset:30});
})
