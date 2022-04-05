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
		arrows: true,
        dots: true,
        dotsClass: 'slides__dots slides__dots--default',
        prevArrow: '<button class="slick-prev slides__arrow slides__arrow--prev" aria-label="Previous" type="button"></button>',
        nextArrow: '<button class="slick-next slides__arrow slides__arrow--next" aria-label="Next" type="button"></button>'
    });

    new WOW().init();

    $('[data-switch="true"]').on('click',function(){
        var active = $('[data-js-id="toosList"]').hasClass('active');
        if (!active) {
            $('[data-js-id="toosList"]').addClass('active');
        } else {
            $('[data-js-id="toosList"]').removeClass('active');
        }
    });

    // $('[data-js-id="clear-form"]').on('click',function(){
    //     var form=$(this).closest('form');
    //     form.find('input, textarea').val('');
    // });

    $('[data-js="refresh-captcha"]').on('click',function(){
        let button = $(this);
        let url = $(this).data('js-url');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: url,
            dataType: "JSON",
            beforeSend : function() {
                button.attr('disabled', true);
            },
            success: function (res) {
                button.closest('.captcha').find('img').attr('src', res);
            },
            complete: function () {
                button.attr('disabled', false);
            },
            error: function(res) {
                console.log(res);
            }
        });
    });

    $('[data-js="post-form"]').submit(function(e){
        e.preventDefault();

        let form = $(this);
        let url = form.attr('action');
        let formSubmitButton = form.find('[data-js="form-submit"]');
        let captchaRefreshButton = form.find('[data-js="refresh-captcha"]');

        //ajax
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: url,
            data: form.serialize(),
            dataType: "JSON",
            beforeSend : function() {
                form.find('[data-js="form-error"]').text('');
                formSubmitButton.attr('disabled', true);
            },
            success: function (res) {
                if (undefined !== res.message) {
                    Swal.fire({
                        title: res.message,
                        confirmButtonText: '關閉',
                        confirmButtonColor: '#914897'
                    }).then(function () {
                        form.trigger('reset');
                    });
                }
            },
            complete: function () {
                formSubmitButton.attr('disabled', false);
                captchaRefreshButton.click();
            },
            error: function(res) {
                let errors = res.responseJSON.errors;
                $.each(errors, function (name, error) {
                    $('[name="' + name + '"]').closest('.row__col').find('[data-js="form-error"]').text(error);
                });
            }
        });
    });

    $('[data-anchor="true"]').on('click',function(e){
        e.preventDefault();
        var target=$(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);
    });
});
