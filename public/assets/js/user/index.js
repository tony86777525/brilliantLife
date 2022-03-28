$(function () {
	//e.preventDefault();
	//e.stopPropagation();
	var $mediaSlider = $('[data-slick-slider="media"');
    $mediaSlider.on('init', function(event, slick){
        $(this).closest('.carousel').css({'visibility':'visible'});
    }).slick({
        infinite: true,
        rows: 0,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnFocus: false, 
        pauseOnHover: false,
		arrows: false,
        dots: true,
        dotsClass: 'slides__dots slides__dots--default',
        prevArrow: '<button class="slick-prev slides__arrow slides__arrow--prev" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next slides__arrow slides__arrow--next" aria-label="Next" type="button"></button>'
    });

    new WOW().init();
});
