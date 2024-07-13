jQuery(document).ready(function($) {
    function initSlick() {
        if ($(window).width() <= 430) {
            $('.product-list').not('.slick-initialized').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                infinite: true,
                prevArrow: '<button type="button" class="slick-prev custom-prev-arrow"></button>',
                nextArrow: '<button type="button" class="slick-next custom-next-arrow"></button>',
            });
        } else {
            if ($('.product-list').hasClass('slick-initialized')) {
                $('.product-list').slick('unslick');
            }
        }
    }

    initSlick();
    $(window).on('resize', function() {
        initSlick();
    });
});
