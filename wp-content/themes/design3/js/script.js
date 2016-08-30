$(document).ready(function() {


    $.fn.extend({
        animateCss: function(animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            $(this).addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });
    var w = $(window).innerWidth();
    if (w > 768) {
        $('.menu-item-has-children').hover(function() {
            $(this).children('.sub-menu').slideDown(200, stop());
        }, function() {
            $(this).children('.sub-menu').slideUp(200, stop());
        });

        function stop() {
            $('.sub-menu').stop(true, true);
        }
    } else {
        $('.navbar-toggle').click(function() {
            $('#menu-primary-menu').slideToggle();
        });
    }
    $('.menu-toggle').click(function() {
        $('.nav-menu').slideToggle();
    })



    var headerpos = $('.bottom-header').offset();
    var headertop = headerpos.top;
    var headerstartpos = headerpos.top;
    //var timeout,
    /*

    clicker.mousedown(function() {

        console.log(this);

        var e = $(this);

        $(this).css({
            'top': '4px',
            'box-shadow': 'none',
        });

        var timeout = setInterval(function() {


            $(this).css({
                'top': '4px',
                'box-shadow': 'none',
            });
        }, 500);
        //return false;
    });



    $(document).mouseup(function() {



        if ($('.btn').mouseover()) {


            $(clicker).css({
                'top': 'initial',
                'box-shadow': '0 4px #0D4479',
            });



        } else {
            $(clicker).css({
                'top': '0px',
                'box-shadow': '0 6px #0D4479',
            });
        }
       // return false;
    });
    $('.btn').mouseover(function() {
        $(this).css({
            'top': 'initial',
            'box-shadow': '0 4px #0D4479',
        });
    });
    $('.btn').mouseout(function() {
        clearInterval(timeout);
        $(this).css({
            'top': 'initial',
            'box-shadow': '0 6px #0D4479',
        });
        //return false;
    });
    */
    //var image = $('.banner').css('background-image');
    /*
    var owl = $('#offers');
    owl.owlCarousel({
        items: 1,
        slideSpeed: 400,
        autoplay: 6000,
        loop: true,
        nav: true,
        navigation: true,
        autoplayHoverPause: false,
        navText: ["<i id='left-nav' class='fa fa-angle-left'></i>", "<i id='right-nav' class='fa fa-angle-right'></i>"],
    });
    */



    $(window).scroll(function() {

        var top = $(window).scrollTop();

        var headerpos = $('.bottom-header').offset();

        var headertop = headerpos.top;



        if (top >= headerstartpos) {
            $('.bottom-header').addClass('fixed')


        } 
        else if (top < headerstartpos) {
            console.log('notfixed');
            $('.bottom-header').removeClass('fixed')

        }
    });





    var mySwiper = new Swiper('#slideshow .swiper-container', {

        // Optional parameters	

        loop: true,
        autoplay: 6000,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,


        onSlideChangeStart: function(swiper) {
            $('.banner-text-box').css({
                display: "none",
            });
        },

        onSlideChangeEnd: function(swiper) {
            $('.banner-text-box').animateCss('fadeInUp');
            $('.banner-text-box').css({
                display: "block",
            });
        }

    });

        var tipsSwiper = new Swiper('#tipsslider .swiper-container', {

        loop: true,
        autoplay: 6000,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        pagination: '.swiper-pagination',
        paginationClickable: true,
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 20,
        breakpoints: {
            550: {
                slidesPerView: 1
            }
        }

    });



});