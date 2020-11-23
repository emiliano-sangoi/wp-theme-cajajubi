'use strict';

$(document).ready(function () {

    // To Top Button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.to_top_button:hidden').stop(true, true).fadeIn();
        } else {
            $('.to_top_button').stop(true, true).fadeOut();
        }
    });



    $(".to_top_button").click(function () {
        $("html,body").animate({
            scrollTop: $("body").offset().top
        }, "1000");
        return false;
    });
    
    
    
    // ===========================================================================================    
    // Smooth scrolling using jQuery easing
    var top = 75;
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - top)
                }, 1500, "easeInOutExpo");
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $('.js-scroll-trigger').click(function () {
        $('.navbar-collapse').collapse('hide');
    });

    // Activate scrollspy to add active class to navbar items on scroll
    $('body').scrollspy({
        target: '#mainNav',
        offset: top
    });



});
