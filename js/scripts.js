jQuery(document).ready(function ($) {

    $('.menu-item-name').on('click', function (){
        $('.header__submenu').toggleClass('submenu-active');
    });

    $('.menu-item-name').on('click', function (){
        $('.header__submenu').removeClass('submenu-active');
    });

    $('.header__icon-menu').on('click', function (){
        $('.header__nav').toggleClass('nav-mobile-open');
        $('.header__icon-menu').toggleClass('icon-menu-close');
    });

    const top_bottom_slider = new Swiper('.top-slider-client, .bottom-slider-client', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 6,
        breakpoints: {
            320: {
                spaceBetween: 48,
                slidesPerView: 2.5,
            },
            1024: {
                spaceBetween: 135,
                slidesPerView: 6,
            },
        },
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
          },
        speed: 5000,
    });

    const center_slider = new Swiper('.center-slider-client, .slider-client-mob', {
        loop: true,
        breakpoints: {
            320: {
                spaceBetween: 48,
                slidesPerView: 2.5,
            },
            1024: {
                spaceBetween: 135,
                slidesPerView: 6,
            },
        },
        autoplay: {
            delay: 1,
            disableOnInteraction: false,
            reverseDirection: true,
          },
        speed: 5000,
    });

    const reviews = new Swiper('.section-reviews__slider .swiper-container', {
        loop: true,
        loopAdditionalSlides: 9,
        slidesPerView: 'auto',
        spaceBetween: 28,
        pagination: {
            el: '.section-reviews__slider .swiper-pagination',
            type: 'bullets',
        },
    });

    $('.section-benefits__tab-navigation li').on('click', function(e) {
        // e.preventDefault();
        var tabActive = $(this).attr('data-tab');
        $(this).addClass('active');
        $(this).siblings().removeClass('active');
        $('.section-benefits__tab-container .tab[id="'+ tabActive + '"').addClass('active');
        $('.section-benefits__tab-container .tab[id="'+ tabActive +'"').siblings().removeClass('active');
    })

    $('.hide').on('click', function (){
        $('.section-ad').toggleClass('section-ad-close');
    });

    $('.section-benefits__tabs-mob li').on('click', function (){
        $(this).toggleClass('tab-mob-active');
    });

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if(height > 50){
        $('header').addClass('header-fixed');
        } else{
        $('header').removeClass('header-fixed');
        }
    });

    function checkVisible( elm, eval ) {
        eval = eval || "visible";
        var vpH = $(window).height(), // Viewport Height
            st = $(window).scrollTop(), // Scroll Top
            y = $(elm).offset().top,
            elementHeight = $(elm).height();
        if (eval == "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
        if (eval == "above") return ((y < (vpH + st)));
    }

    $('.animate-block').not('.anim-run').each(function(){
        if(checkVisible($(this))){
            $(this).addClass('anim-run')
        }
    });

    $(window).scroll(function() {
        $('.animate-block').not('.anim-run').each(function(){
            if(checkVisible($(this))){
                $(this).addClass('anim-run')
            }
        });
    });
});
