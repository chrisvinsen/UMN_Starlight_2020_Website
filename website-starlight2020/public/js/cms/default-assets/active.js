$(document).ready(function($){
    'use strict';

    var starlight_window = $(window);

    // ****************************
    // :: 1.0 Preloader Active Code
    // ****************************
    starlight_window.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });
    });

    // ****************************
    // :: 2.0 ClassyNav Active Code
    // ****************************
    if ($.fn.classyNav) {
        $('#conferNav').classyNav();
    }

    // *********************************
    // :: 3.0 Welcome Slides Active Code
    // *********************************

    if ($.fn.owlCarousel) {
        var welcomeSlider = $('.welcome-slides');
        welcomeSlider.owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            smartSpeed: 1000,
            autoplayTimeout: 10000,
            nav: true,
            navText: [('<i class="zmdi zmdi-chevron-left"></i>'), ('<i class="zmdi zmdi-chevron-right"></i>')]
        })

        welcomeSlider.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        welcomeSlider.on('translated.owl.carousel', function () {
            var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });
    }

    // ******************************
    // :: 17.0 ScrollDown Active Code
    // ******************************

    $("#scrollDown").on('click', function () {
        $('html, body').animate({
            scrollTop: $("#about").offset().top - 75
        }, 800);
    });

    // ************************************
    // :: 4.0 Instragram Slides Active Code
    // ************************************
    
    if ($.fn.owlCarousel) {
        var clientArea = $('.client-area');
        clientArea.owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            smartSpeed: 1000,
            margin: 40,
            autoplayTimeout: 7000,
            nav: true,
            navText: [('<i class="zmdi zmdi-chevron-left"></i>'), ('<i class="zmdi zmdi-chevron-right"></i>')],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2,
                    margin: 15
                },
                992: {
                    margin: 20
                },
                1200: {
                    margin: 40
                }
            }
        });
    }

    // *********************************
    // :: 5.0 Masonary Gallery Active Code
    // *********************************

    if ($.fn.imagesLoaded) {
        $('.starlight-portfolio').imagesLoaded(function () {
            // filter items on button click
            $('.portfolio-menu').on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            // init Isotope
            var $grid = $('.starlight-portfolio').isotope({
                itemSelector: '.single_gallery_item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.single_gallery_item'
                }
            });
        });
    }

    // ***********************************
    // :: 6.0 Counter Up Active Code
    // ***********************************
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // ***********************************
    // :: 6.0 Portfolio Button Active Code
    // ***********************************

    $('.portfolio-menu button.btn').on('click', function () {
        $('.portfolio-menu button.btn').removeClass('active');
        $(this).addClass('active');
    })

    // ********************************
    // :: 7.0 Search Button Active Code
    // ********************************
    $('.search-btn').on('click', function () {
        $('.search-form').toggleClass('search-form-active');
    })

    // ************************
    // :: 8.0 Stick Active Code
    // ************************

    starlight_window.on('scroll', function () {
        if (starlight_window.scrollTop() > 0) {
            $('.header-area').addClass('sticky');
        } else {
            $('.header-area').removeClass('sticky');
        }
    });

    // *********************************
    // :: 9.0 Magnific Popup Active Code
    // *********************************
    if ($.fn.magnificPopup) {
        
        $('.video-play-btn').magnificPopup({
            type: 'iframe'
        });
        $('.portfolio-img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                preload: [0, 2],
                navigateByImgClick: true,
                tPrev: 'Previous',
                tNext: 'Next'
            }
        });
        $('.single-gallery-item').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                preload: [0, 2],
                navigateByImgClick: true,
                tPrev: 'Previous',
                tNext: 'Next'
            }
        });
    }

    // **************************
    // :: 10.0 Tooltip Active Code
    // **************************
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip();
    }

    // ***********************
    // :: 11.0 WOW Active Code
    // ***********************
    if (starlight_window.width() > 767) {
        new WOW().init();
    }

    // ****************************
    // :: 12.0 Jarallax Active Code
    // ****************************
    if ($.fn.jarallax) {
        $('.jarallax').jarallax({
            speed: 0.5
        });
    }

    // ****************************
    // :: 13.0 Countdown Active Code
    // ****************************
    if ($.fn.countdown) {
        $("#clock").countdown("2020/10/24", function (event) {
            $(this).html(event.strftime("<div>%m <span>Months</span></div> <div>%d <span>Days</span></div> <div>%H <span>Hours</span></div> <div>%M <span>Minutes</span></div> <div>%S <span>Seconds</span></div>"));
        });
    }

    // ****************************
    // :: 13.0 Scrollup Active Code
    // ****************************
    if ($.fn.scrollUp) {
        starlight_window.scrollUp({
            scrollSpeed: 1000,
            scrollText: '<i class="arrow_carrot-up"</i>'
        });
    }

    // *********************************
    // :: 14.0 Prevent Default 'a' Click
    // *********************************
    $('a[href="#"]').on('click', function ($) {
        $.preventDefault();
    });

    // *********************************
    // :: 14.0 Prevent Default 'a' Click
    // *********************************
    var pricingTable = $(".single-ticket-pricing-table");

    pricingTable.on("mouseenter", function () {
        pricingTable.removeClass("active");
        $(this).addClass("active");
    });

    function VerticalTimeline( element ) {
        this.element = element;
        this.blocks = this.element.getElementsByClassName("cd-timeline__block");
        this.images = this.element.getElementsByClassName("cd-timeline__img");
        this.contents = this.element.getElementsByClassName("cd-timeline__content");
        this.offset = 0.8;
        this.hideBlocks();
    };

    VerticalTimeline.prototype.hideBlocks = function() {
        if ( !"classList" in document.documentElement ) {
            return; 
        }
        var self = this;
        for( var i = 0; i < this.blocks.length; i++) {
            (function(i){
                if( self.blocks[i].getBoundingClientRect().top > window.innerHeight*self.offset ) {
                    self.images[i].classList.add("cd-timeline__img--hidden"); 
                    self.contents[i].classList.add("cd-timeline__content--hidden"); 
                }
            })(i);
        }
    };

    VerticalTimeline.prototype.showBlocks = function() {
        if ( ! "classList" in document.documentElement ) {
            return;
        }
        var self = this;
        for( var i = 0; i < this.blocks.length; i++) {
            (function(i){
                if( self.contents[i].classList.contains("cd-timeline__content--hidden") && self.blocks[i].getBoundingClientRect().top <= window.innerHeight*self.offset ) {
                    self.images[i].classList.add("cd-timeline__img--bounce-in");
                    self.contents[i].classList.add("cd-timeline__content--bounce-in");
                    self.images[i].classList.remove("cd-timeline__img--hidden");
                    self.contents[i].classList.remove("cd-timeline__content--hidden");
                }
            })(i);
        }
    };

    var verticalTimelines = document.getElementsByClassName("js-cd-timeline"),
        verticalTimelinesArray = [],
        scrolling = false;
    if( verticalTimelines.length > 0 ) {
        for( var i = 0; i < verticalTimelines.length; i++) {
            (function(i){
                verticalTimelinesArray.push(new VerticalTimeline(verticalTimelines[i]));
            })(i);
        }

        window.addEventListener("scroll", function(event) {
            if( !scrolling ) {
                scrolling = true;
                (!window.requestAnimationFrame) ? setTimeout(checkTimelineScroll, 250) : window.requestAnimationFrame(checkTimelineScroll);
            }
        });
    }

    function checkTimelineScroll() {
        verticalTimelinesArray.forEach(function(timeline){
            timeline.showBlocks();
        });
        scrolling = false;
    };
   

});