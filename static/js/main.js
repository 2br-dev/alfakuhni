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
    if ($(window).width() < 768) {
      $('.gallery-slider').slick({
            dots: true,
            infinite: true,
            speed: 800,
            adaptiveHeight: true,
            arrows: false,
            fade: true,
            cssEase: 'linear'
        });  
    } else {
        new WOW().init(); // инициализируем WOW.JS Только на десктопе

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


