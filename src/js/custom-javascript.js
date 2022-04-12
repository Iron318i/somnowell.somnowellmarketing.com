+function ($) {
    $('body').append('<div id="toTop" class="btn">&nbsp</div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });
    $('#toTop').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });
    $('.wpcf7').click(function () {
        $(".wpcf7-mail-sent-ok").hide();
    });

    $('.latest-news .owl-carousel').owlCarousel({
        responsiveClass: true,
        dots: true,
        nav: false,
        margin: 0,
        items: 1,
        loop: false,
        autoplay: false,
        margin: 0,
        responsive: {
            576: {
                margin: 15,
                items: 2
            },
            768: {
                margin: 40,
                items: 3
            },
        }
    });

    var myCollapsible = document.getElementById('navbarNavDropdown');
    myCollapsible.addEventListener('show.bs.collapse', function () {
        $('body').addClass('overflow-hidden');
    });
    myCollapsible.addEventListener('hide.bs.collapse', function () {
        $('body').removeClass('overflow-hidden');
    });
}(jQuery);

