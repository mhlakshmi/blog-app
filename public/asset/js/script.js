(function($) {

	"use strict";

	
	/* MOBILE MENU */
	$('nav.menu').meanmenu({
		meanMenuClose: 'X',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});
	
     /* WOW ANIMATION SETTING */
   var wow = new WOW({
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       0,          // default
    mobile:       true,       // default
    live:         true        // default
});
wow.init();


	// Hero main slider active js
	$('.hero-slider-active').slick({
		autoplay: true,
		infinite: true,
		fade: true,
		dots: true,
		arrows: false,
		prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
		nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
		responsive: [{
			breakpoint: 768,
			settings: {
				arrows: false,
			}
		}, ]
	});
	
	/* TESTIMONIAL SLIDER */
    if ($('.testimony-carousel').length > 0) {
        $('.testimony-carousel').owlCarousel({
            margin:30,
            //loop:true,
            loop:($(".testimony-carousel .item").length > 1) ? true: false,
            nav: false,
            dots: false,
            autoplay:true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                481:{
                    items:1
                },
                568:{
                    items:1
                },
                569:{
                    items:1
                },
                575:{
                    items:1
                },
                767:{
                    items:2
                },
                992:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });
    }
	  


    if ($('.blogs-carousel ').length > 0) {
        $('.blogs-carousel ').owlCarousel({
            margin:30,
            // loop:true,
            loop:($(".blogs-carousel .item").length > 1) ? true: false,
            nav:true,
            dots: false,
            autoplay:true,
            navText: ['previous', 'next'],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                481:{
                    items:1
                },
                568:{
                    items:2
                },
                569:{
                    items:2
                },
                575:{
                    items:2
                },
                767:{
                    items:2
                },
                992:{
                    items:2
                },
                1200:{
                    items:2
                }
            }
        });
    }
	
    if ($('.facilities-carousel ').length > 0) {
        $('.facilities-carousel ').owlCarousel({
            margin:20,
            //loop:true,
            loop:($(".facilities-carousel .item").length > 1) ? true: false,
            nav:true,
            dots: false,
            autoplay:true,
            autoplayHoverPause: true, // Pause on hover
            navText: ['previous', 'next'],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                481:{
                    items:2
                },
                568:{
                    items:2
                },
                569:{
                    items:2
                },
                575:{
                    items:2
                },
                767:{
                    items:3
                },
                992:{
                    items:4
                },
                1200:{
                    items:5
                }
            }
        });
    }
	

    $(".about-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        navText: [
          '<i class="fab fa-chevron-left sliderArwClr" aria-hidden="true"></i>',
          '<i class="fab fa-chevron-right sliderArwClr" aria-hidden="true"></i>',
        ],
        autoplay: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        smartSpeed: 700,
        fluidSpeed: 700,
        center: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
          0: {
            items: 3,
            smartSpeed: 900,
            fluidSpeed: 900,
          },
          426: {
            items: 3,
          },
          768: {
            items: 3,
          },
          992: {
            items: 3,
          },
          1024: {
            items: 3,
          },
          1400: {
            items: 3,
          },
        },
      });
	
	
	
	/* POPUP VIDEO */  
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function(){
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title'         : this.title,
                helpers     : {  
                    title : { type : 'inside' },
                    media : {}
                },
                

                beforeShow : function(){
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });    
    }
	
	$(window).on('load', function() {
        $('.fancybox').fancybox();
        
        
        /***** Navigation Active Class Query *****/
		$(function($) {
		  var url = window.location.href;
		  $('nav ul li a').each(function() {
		    if (this.href === url) {
		      $(this).closest('li').addClass('active');
		    }
		  });
		});
    });
        
})(window.jQuery);

