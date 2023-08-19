//[Master Javascript]





//accordian start

	//accordian end


$(function () {
    "use strict";   

		
	
	jQuery(window).scroll(startCounter);
	function startCounter() {
		var hT = jQuery('.countnm-bx').offset().top,
			hH = jQuery('.countnm-bx').outerHeight(),
			wH = jQuery(window).height();
		if (jQuery(window).scrollTop() > hT+hH-wH) {
			jQuery(window).off("scroll", startCounter);
			jQuery('.countnm').each(function () {
				var $this = jQuery(this);
				jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
					duration: 2000,
					easing: 'swing',
					step: function () {
						$this.text(Math.ceil(this.Counter) + '');
					}
				});
			});
		}
	}
	
	
  });
  
   // End of use strict




$(function () {
      var owlslider = jQuery("div.owl-carousel");
        owlslider.each(function () {
        var $this = $(this),
              $items = ($this.data('items')) ? $this.data('items') : 1,
              $loop = ($this.attr('data-loop')) ? $this.data('loop') : true,
              $navdots = ($this.data('nav-dots')) ? $this.data('nav-dots') : false,
              $navarrow = ($this.data('nav-arrow')) ? $this.data('nav-arrow') : false,
              $autoplay = ($this.attr('data-autoplay')) ? $this.data('autoplay') : true,
              $autohgt = ($this.data('autoheight')) ? $this.data('autoheight') : false,
              $autowdt = ($this.data('autoWidth')) ? $this.data('autoWidth') : true,
              $space = ($this.attr('data-space')) ? $this.data('space') : 20;
         
              $(this).owlCarousel({
                  loop: $loop,
                  items: $items,
                  responsive: {
                    0:{items: $this.data('xx-items') ? $this.data('xx-items') : 1},
                    480:{items: $this.data('xs-items') ? $this.data('xs-items') : 1},
                    768:{items: $this.data('sm-items') ? $this.data('sm-items') : 2},
                    980:{items: $this.data('md-items') ? $this.data('md-items') : 3},
                    1200:{items: $items}
                  },
                  dots: $navdots,
                  autoHeight:$autohgt,
                  margin:$space,
                  nav: $navarrow,
                  navText:["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"],
                  autoplay: $autoplay,
                  autoplayHoverPause: true,
              });
       }); 
 });
$(function () {
	
	 AOS.init({
		easing: 'ease-in-out-sine'
	  });

});






