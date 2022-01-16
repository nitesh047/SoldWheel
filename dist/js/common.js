

(function ($) {
    "use strict";
    $('input,textarea').focus(function () {
        $(this).data('placeholder', $(this).attr('placeholder'))
                .attr('placeholder', '');
    }).blur(function () {
        $(this).attr('placeholder', $(this).data('placeholder'));
    });
    // Header Fixed Scroll Js
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("#header-fix").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("#header-fix").removeClass("active");
        }
    });

    // Background Image Maker Js
    $('.background-image-maker').each(function () {
        var imgURL = $(this).next('.holder-image').find('img').attr('src');
        $(this).css('background-image', 'url(' + imgURL + ')');
    });

    //Owl Slider
    $("#owl-demo").owlCarousel({
        navigation: false,
        nav: true,
        slideSpeed: 500,
        paginationSpeed: 900,
        items: 1,
        singleItem: true,
        autoPlay: false
    });

    // Owl Client Js
    $("#owl-client").owlCarousel({
        nav: false,
        slideSpeed: 500,
        paginationSpeed: 900,
        items: 1,
        pagination: true,
        autoPlay: false,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsTablet: [768, 1],
    });

    // Slick Slider 4 Column Js
    $('.multiple-items').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    // Slick Slider 3 Column Js
    $('.multiple-items2').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
        ]
    });
    // Slick Slider 4 Column Js
    $('.multiple-itemsused').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        lazyLoad: 'ondemand',
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('a.newslider').on('shown.bs.tab', function (e) {
        $('.multiple-items').slick('refresh');
        $('.multiple-items').resize();
    });
    $('a.usedslider').on('shown.bs.tab', function (e) {
        $('.multiple-itemsused').slick('refresh');
        $('.multiple-itemsused').resize();
    });

    // Slick Slider 2 Column Js
    $('.multiple-items3').slick({
        centerMode: true,
        centerPadding: '130px',
        slidesToShow: 2,
        dots: true,
        arrows: false,
        autoplay: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // Testimonial Slider Js
    $('.testimonial').slick({
        centerMode: true,
        dots: true,
        centerPadding: '0px',
        arrows: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // Top To Bottom Js
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });

    // Countdown Js
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            var t = getTimeRemaining(endtime);
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    var deadline = new Date(Date.parse(new Date()) + 28 * 11 * 28 * 60 * 1000);
    if ($('#clockdiv').length) {
        initializeClock('clockdiv', deadline);
    }

    // Bootstrap Range Slider Js
    $('[data-ui-slider]').slider();

    // Flex Thumbnail Slider Js
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

    // Megnific Popup Js
    $('a.btn-gallery').on('click', function (event) {
        event.preventDefault();
        $('.slides').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {enabled: true},
        });
    });

    // leanmodel
    var loginform = $(".login_form");
    var userlogin = $(".user_login");
    var userregister = $(".user_register");
    // Plugin options and our code
    loginform.leanModal({
        top: 50,
        overlay: 0.6,
        closeButton: ".modal_close"
    });
    $(".register_form").leanModal({
        top: 50,
        overlay: 0.6,
        closeButton: ".modal_close"
    });
// Calling Login Form


    // Calling Login Form
    loginform.on('click', function () {
        userregister.hide();
        userlogin.show();
        $(".header_title").text('Login');
        return false;
    });

    // Calling Register Form
    $(".register_form").on('click', function () {
        userlogin.hide();
        userregister.show();
        $(".header_title").text('Register');
        return false;
    });

})(jQuery);

/** Map Marker Js
 !function (map) {
 "use strict";
 map = new GMaps({
 el: '#markermap',
 lat: 34.043333,
 lng: -78.028333
 
 });
 map.addMarker({
 lat: 34.042,
 lng: -78.028333,
 title: 'Marker with InfoWindow',
 infoWindow: {
 content:
 '\<div class="p-3">'+
 '<h5 class="c-font-weight-700 mb-3">New York</h5>'+
 '<ul class="list-unstyled c-line-height-2_5 mb-0">'+
 '<li><i class="lnr lnr-map pr-2"></i> 9868 Forest Avenue Pompano Beach, FL 33060</li>'+
 '<li><i class="lnr lnr-phone-handset pr-2"></i>1800 123 1800</li>'+
 '<li><i class="lnr lnr-printer pr-2"></i> 1800 123 1985</li>'+
 '<li><i class="lnr lnr-envelope pr-2"></i> contact@carspot.co.in</li>'+
 '</ul>'+
 '</div>'
 }
 });
 }(window.jQuery); **/