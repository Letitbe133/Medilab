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

  var generics = [
    {value: { name: 'produit 1', code: 1234, generic: false}},
    {value: { name: 'produit 2', code: 5678, generic: true}},
    {value: { name: 'produit 3', code: 9101112, generic: true}},
    {value: { name: 'produit 4', code: 13141516, generic: false}},
    {value: { name: 'produit 5', code: 17181920, generic: true}}
  ];

  var matchOptions = function(input, matchedOptions, allOptions, value) {
  // if they have entered an exact PLU code match, show that fruit
  input = parseInt(input, 10);
  for (var i = 0; i < allOptions.length; i++) {
    if (input === allOptions[i].value.code) {
      return [allOptions[i]];
    }
  }

  // else return the matched options
  return matchedOptions;
};

var config = {
  placeholderHTML: 'Enter generic name or code',
  lists: {
    generics: {
      matchOptions: matchOptions,
      optionHTML: '{name}',
      options: generics
    }
  }
};

  var widget = new AutoComplete('search_bar', config);

})
