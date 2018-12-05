$(document).ready(function() {
    // плавный скроллинг
    var $page = $('html, body');
    $('a[href*="#"]').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
        return false;
    });

    // lightbox
    $('.realised-projects-photos-item a, .projects a, .gallery-image a').simpleLightbox({
        alertError: false,
        additionalHtml: "© KUHNIALFA.RU"
    });

    // slick
    if ($(window).width() <= 768) {
        $('.projects-slider').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            arrows: false,
        });    
    }
    if ($(window).width() < 768) {
      $('.gallery-slider').slick({
            dots: true,
            infinite: true,
            speed: 1200,
            adaptiveHeight: true,
            arrows: false,
            fade: true,
            cssEase: 'linear'
        });  
    } else {
        new WOW().init(); // инициализируем WOW.JS Только на десктопе
        $('.projects-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            infinite: true,
            speed: 900,
            adaptiveHeight: true,
            arrows: true,
        });  

        $('.gallery-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            adaptiveHeight: true,
            arrows: true,
            fade: true,
            cssEase: 'linear'
        });  
    }

});

$('li[class^="subswatch-"],li[class*=" subswatch-"]').click(function() {
    $(".card").css('background-image', 'unset');
	var selectedSwatch = $(this);
	var selectedSwatchName = selectedSwatch.data('tooltip');
	var selectedSwatchNumber = selectedSwatch.attr('class').match(/\d+/)[0];
	var selectedSwatchParent = selectedSwatch.closest('ul');
	var selectedSwatchParentOffset = selectedSwatchParent.css('top');
	var selectedColor = selectedSwatch.css('background-color');
	var selectedOffset = selectedSwatch.offset();
	var cardOffset = $('.card').offset();
	var rippleOriginTop = selectedOffset.top - cardOffset.top + (selectedSwatch.outerHeight() / 2);
	var rippleOriginLeft = selectedOffset.left - cardOffset.left + (selectedSwatch.outerWidth() / 2);
	var newParentOffset = -(((selectedSwatchNumber - 1) * 54) + 4);

	$('.color-picker .active').removeClass('active');
	selectedSwatchParent.css("top", newParentOffset);
	selectedSwatchParent.find('.centered').removeClass('centered');
	selectedSwatch.addClass('active centered');
	$('.ripple').css({
		left: rippleOriginLeft,
		top: rippleOriginTop,
		backgroundColor: selectedColor
	}).addClass('scaling');

	setTimeout(function() {
		$('.painter').css({
			backgroundColor: selectedColor
		});
		$('.color-name').empty().append(selectedSwatchName);
	}, 400);
	setTimeout(function() {
		$('.ripple').removeClass('scaling');
	}, 900);
})
$(".serh1").click(function() {
    $(".card").css({
        background: `url('/patterns/strukt67.jpg')`
    })
})
$(".serh2").click(function() {
    $(".card").css({
        background: `url('/patterns/dino20.jpg')`
    })
})
$(".serh3").click(function() {
    $(".card").css({
        background: `url('/patterns/kot_fon152.jpg')`
    })
})
$(".serh4").click(function() {
    $(".card").css({
        background: `url('/patterns/strukt51.jpg')`
    })
})
$(".serh5").click(function() {
    $(".card").css('background-image', 'url("/patterns/1.jpg")');
})



