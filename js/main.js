$(function(){

  // Initialisation menu hamburger
  $(".button-collapse").sideNav({
    closeOnClick: true
  });

  // initialisation carousel
  $('.carousel').carousel({duration: 300, dist: -100, shift: 50, indicators: true});

  // initialisation carousel pleine largeur
  $('.carousel.carousel-slider').carousel({duration: 300, fullWidth: true, indicators: true});

  // Initialisation parallax
  $('.parallax').parallax();

  // Initialisation scrollSpy
  $('.scrollspy').scrollSpy({scrollOffset:30});


  // EasyAutocomplete setup
  var options = {
	url: "http://localhost/medilab/products.json",

	getValue: "name",

  placeholder: 'Search for a product',

  theme: "dark",

  highlightPhrase: true,

	list: {
		match: {
			enabled: true
		},

    sort: {
      enabled: true
    },

    showAnimation: {
  			type: "fade", //normal|slide|fade
  			time: 400,
  			callback: function() {}
  		},

  		hideAnimation: {
  			type: "fade", //normal|slide|fade
  			time: 400,
  			callback: function() {}
  		},

      onClickEvent: function(){
        var target = $("#search_bar").getSelectedItemData();
        var value = target.description + " " + target.conditionnement;
        $("#desc").val(value).trigger("change");
      }
	}
};

  $("#search_bar").easyAutocomplete(options);


})
