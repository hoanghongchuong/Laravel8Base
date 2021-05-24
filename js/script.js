$(document).ready(function($){	
	var owl = $(".owl-carousel-product");
	  	owl.owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:2,									            									            
		        },
		        600:{
		            items:2,          
		        },
		        1000:{
		            items:4,  
		        }
		    }
		});

	  	$(".owl-carousel-feedback").owlCarousel({
	  		margin:0, 							
	  		loop:true, 							
	  		nav:true, 							
	  		navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'], 
	  		autoplay:false, 						
	  		autoplayTimeout:1500,
			autoplayHoverPause:true,
			autoplaySpeed: 2000,
			responsiveClass:true, 				
		    responsive:{
		        0:{
		            items:1,									            									            
		        },
		        600:{
		            items:1,          
		        },
		        1000:{
		            items:1,  
		        }
		    }
		});

		$('.slider-for').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  arrows: false,
		  fade: true,
		  asNavFor: '.slider-nav',
			 autoplay: true
		});
		$('.slider-nav').slick({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  asNavFor: '.slider-for',
		  dots: false,
		  centerMode: true,
		  focusOnSelect: true,
		  responsive: [{
	 			breakpoint: 1024,
	 			settings: {
	 				slidesToShow: 5,
	 				slidesToScroll: 5,
	 			}
	 		}, {
	 			breakpoint: 640,
	 			settings: {
	 				slidesToShow: 4,
	 				slidesToScroll: 4,
				}
	 		}, {
	 			breakpoint: 420,
	 			settings: {
	 				slidesToShow: 3,
	 				slidesToScroll: 3,
			}
	 		}]

		}); 
// Init Slider
  $('.owl-slider').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    nav: false,
    dots: false,

  });
  // Pref add class active to 1st thumbnail via js
  $('.thumbnail').eq(0).addClass('active');
  // When slider autoplay or drag is true 
  $('.owl-slider').on('changed.owl.carousel', function(event) {
    $('.thumbnail').removeClass('active');
    var sliders = 4;
    var currentItem = event.item.index - 2;
    if(currentItem >= sliders) {
      currentItem = 0;
    }
    $('.thumbnail').eq(currentItem).addClass('active');
  });
  // When thumbnail is clicked
  $('.thumbnail a').click(function(event) {
    event.preventDefault();
    $('.thumbnail').removeClass('active');
    var index = $('.thumbnail a').index(this);
    $('.thumbnail').eq(index).addClass('active');
    $('.owl-slider').trigger('to.owl.carousel', [index, 300, true]);
  });


	// box input search
	$('.box-search i').on('click', function(){
		$('.box-search input').addClass('show-input-search');
	});

});

