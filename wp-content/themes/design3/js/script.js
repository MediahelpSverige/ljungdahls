$(document).ready(function() {

  $('.sub-menu').append('<i class="fa fa-times" aria-hidden="true"></i>');
  $('.sub-menu').prepend('<h2 class="small-title">Tjänster</h2>');


$('.menu-item-has-children').click( function(){

  console.log(this);

  $(this).children('.sub-menu').slideDown(200);


});

$('i.fa.fa-times').click(function(e){
  e.stopPropagation();
  $(this).parent().slideUp(200);

})



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
        $('.menu-item-has-children').hover(function(e) {
          e.preventDefault();

            //$(this).children('.sub-menu').slideDown(200, stop());
        }, function() {
            //$(this).children('.sub-menu').slideUp(200, stop());
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
        autoplay: 3000,
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
