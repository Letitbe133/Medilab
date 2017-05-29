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

  var options = {
	url: "http://localhost/medilab/products.json",

	getValue: "name",

  placeholder: 'Search for a product',


	list: {
		match: {
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
        var value = target.description + " " + target.dosage ;
        $("#desc").val(value).trigger("change");
      }
	}
};

  $("#search_bar").easyAutocomplete(options);

})
