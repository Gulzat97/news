$(function(){
	var slider = $('#slider');
	$(slider).slick({
		infinite: true,
		slidesToShow: 1,
  		slidesToScroll: 1,
		dots: true,
		speed: 500,
		autoplay: true,
  		autoplaySpeed: 2000,
  		fade: true,
  		cssEase: 'ease-in-out',
  		nextArrow: '<span class="icon-angle-right slider-next"></span>',
  		prevArrow: '<span class="icon-angle-left slider-prev"></span>',
  		responsive : [
  			{
  				breakpoint: 576,
	  			settings: {
	  				arrows: false
	  			}
  			}
  		]
	});

	var singlePostSlider = $('#single-post-slider');
	$(singlePostSlider).slick({
		infinite: true,
		slidesToShow: 3,
  		slidesToScroll: 1,
		dots: true,
		speed: 500,
		autoplay: false,
		cssEase: 'ease-in-out',
		nextArrow: '<span class="icon-angle-right slider-next"></span>',
  		prevArrow: '<span class="icon-angle-left slider-prev"></span>',
  		centerMode: true,
  		responsive : [
  			{
  				breakpoint: 480,
	  			settings: {
	  				slidesToShow: 1,
	  				dots: false,
	  				centerMode: false
	  			}
  			},
  			{
  				breakpoint: 728,
	  			settings: {
	  				slidesToShow: 1,
	  				dots: false,
	  				centerMode: false
	  			}
  			}
  		]
	});
	var topMenu = $('.top-menu');
	var header = $('header');
	var topMenuBtn = $('.top-menu-btn');
	$(topMenuBtn).on('click', function(e){
		$(this).toggleClass('change');
		$(topMenu).slideToggle(200);
	})
})