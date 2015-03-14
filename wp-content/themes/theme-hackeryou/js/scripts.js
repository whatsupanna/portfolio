var $ = jQuery;
$(function(){

	smoothScroll.init();
	$('.arrow').on('click',function() {
		$('.nav').slideToggle();
	});

	 window.isScrolledIntoView = function($elem) {
      var $window = $(window);

      var docViewTop = $window.scrollTop();
      var docViewBottom = docViewTop + $window.height();

      var elemTop = $elem.offset().top;
      var elemBottom = elemTop + $elem.height();

      return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }

    $(window).on('scroll',function() {


    	$('.animate').each(function() {
    		// cache the current box
    		var $el = $(this);
  	  	if(isScrolledIntoView($el)) {
  	  		$el.addClass('visible');
  	  	}

    	});
    });

  });


