jQuery(document).ready(function($) {

	$('.owl-carousel-gym').owlCarousel({
	    center: false,
	    items: 3,
	    loop: true,
		stagePadding: 30,
	    margin: 30,
	    autoplay: false,
	    pauseOnHover: false,
	    nav: true,
	    dots:false,
	    smartSpeed:1000,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	        }
    	}
	  });

	$('.owl-carousel-event').owlCarousel({
	    center: false,
	    items: 3,
	    loop: true,
		stagePadding: 30,
	    margin: 30,
	    autoplay: false,
	    pauseOnHover: false,
	    nav: true,
	    dots:false,
	    smartSpeed:1000,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	        }
    	}
	  });

	$('.owl-carousel-rest').owlCarousel({
	    center: false,
	    items: 3,
	    loop: true,
		stagePadding: 30,
	    margin: 30,
	    autoplay: false,
	    pauseOnHover: false,
	    nav: true,
	    dots:false,
	    smartSpeed:1000,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	        }
    	}
	  });

	$('.owl-carousel-wed').owlCarousel({
	    center: false,
	    items: 3,
	    loop: true,
		stagePadding: 30,
	    margin: 30,
	    autoplay: false,
	    pauseOnHover: false,
	    nav: true,
	    dots:false,
	    smartSpeed:1000,
	    navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:2,
	            nav:true
	        },
	        1000:{
	            items:3,
	            nav:true,
	        }
    	}
	  });
});