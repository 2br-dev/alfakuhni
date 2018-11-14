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

