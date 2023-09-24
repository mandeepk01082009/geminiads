
(function () {
    'use strict';

    /*==================================
    [Table of contents]
    ===================================
        01. Variables
        02. Cirle Progress
        03. Skill Bar
        04. All Slider
        05. Portflolio Filter
        06. Counter
        07. Page Banner Paralax
        08. All Popup
        09. Back To Top
        10. Preloader
        11. Sticky Header
        12. Header Search
        13. Contact Form Submission
        14. Google Maps
        15. Mobile Menu
    */
   
   /*------------------------------------------------------
    /  01. Variables
    /------------------------------------------------------*/
    var $portfolioSlider = $('.portfolioSlider'),
        $clientLogoSlider = $('.clientLogoSlider'),
        $testimonialSlider = $('.testimonialSlider'),
        $testimonialSlider2 = $('.testimonialSlider2'),
        $serviceDegailsGallery = $('.serviceDegailsGallery'),
        $folioSlider = $('#folioSlider'),
        $imgPopup = $('.imgPopup'),
        $videoPoppup = $('.videoPoppup'),
        $searchToggler = $('.searchToggler'),
        $cancleSearch = $('.cancleSearch');

    /*------------------------------------------------------
    /  02. Cirle Progress
    /------------------------------------------------------*/
    if ($(".circleProgress").length > 0) {
        var ast1 = true;
        $('.circleProgress').appear();
        $('.circleProgress').on('appear', function () {
            if (ast1 == true) {
                $(".circleProgress").each(function () {
                    var pint = $(this).attr('data-skills');
                    var decs = pint * 100;
                    var efill = $(this).attr('data-emptyfill');
                    var fill = $(this).attr('data-fills');
                    
                    $(this).circleProgress({
                        value: pint,
                        startAngle: -Math.PI / 2 * 1,
                        fill: { color: fill },
                        lineCap: 'square',
                        thickness: 6,
                        animation: {duration: 1800},
                        size: 96,
                        emptyFill: efill
                    }).on('circle-animation-progress', function (event, progress) {
                        $(this).find('h3').html(parseInt(decs * progress) + '%');
                    });
                });
                ast1 = false;
            }
        });
    }
    
    /*--------------------------------------------------------
    / 03. Skill Bar
    /----------------------------------------------------------*/
    if ($(".singleSkill").length > 0) {
        $('.singleSkill').appear();
        $('.singleSkill').on('appear', loadSkills);
    }
    var coun = true;
    function loadSkills() {
        $(".singleSkill").each(function () {
            var datacount = $(this).attr("data-skill");
            $(".skill", this).animate({ 'width': datacount + '%' }, 2000);
            if (coun) {
                $(this).find('span').each(function () {
                    var $this = $(this);
                    $({ Counter: 0 }).animate({ Counter: datacount }, {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.ceil(this.Counter) + '%');
                        }
                    });
                });
            }
        });
        coun = false;
    }
    
    /*--------------------------------------------------------
    / 04. All Slider
    /----------------------------------------------------------*/
    if ($portfolioSlider.length > 0) {
        var $portfolioSlider_obj = $portfolioSlider.owlCarousel({
            autoplay: true,
            margin: 24,
            loop: true,
            nav: false,
            dots: true,
            items: 3,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            }
        });
    }
    if ($clientLogoSlider.length > 0) {
        var $clientLogoSlider_obj = $clientLogoSlider.owlCarousel({
            autoplay: true,
            margin: 0,
            loop: false,
            nav: false,
            dots: true,
            items: 5,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    }
    if ($testimonialSlider.length > 0) {
        var $testimonialSlider_obj = $testimonialSlider.owlCarousel({
            autoplay: false,
            margin: 24,
            loop: true,
            nav: true,
            navText: [],
            dots: false,
            items: 2,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1200: {
                    items: 2
                }
            }
        });
        $('.tnNext').on('click', function() {
            $testimonialSlider_obj.trigger('next.owl.carousel');
        });
        $('.tnPrev').on('click', function() {
            $testimonialSlider_obj.trigger('prev.owl.carousel');
        });
    }
    if ($testimonialSlider2.length > 0) {
        var $testimonialSlider2_obj = $testimonialSlider2.owlCarousel({
            autoplay: false,
            margin: 24,
            loop: true,
            nav: false,
            dots: true,
            items: 3,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    }
    if ($serviceDegailsGallery.length > 0) {
        var $serviceDegailsGallery_obj = $serviceDegailsGallery.owlCarousel({
            autoplay: true,
            margin: 24,
            loop: true,
            nav: false,
            dots: false,
            items: 2,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 2
                }
            }
        });
    }
    if ($folioSlider.length > 0) {
        $folioSlider.lightSlider({
            gallery: true,
            loop: true,
            item:1,
            vertical: true,
            verticalHeight: 664,
            vThumbWidth: 424,
            thumbItem: 2,
            thumbMargin:24,
            slideMargin: 0,
            galleryMargin: 24,
            responsive : [
                {
                    breakpoint:1600,
                    settings: {
                        verticalHeight: 580,
                        vThumbWidth: 365,
                      }
                },
                {
                    breakpoint:1199,
                    settings: {
                        verticalHeight: 475,
                        vThumbWidth: 290,
                      }
                },
                {
                    breakpoint:800,
                    settings: {
                        thumbMargin:15,
                        verticalHeight: 345,
                        vThumbWidth: 220,
                      }
                },
                {
                    breakpoint:480,
                    settings: {
                        thumbMargin:15,
                        verticalHeight: 150,
                        vThumbWidth: 80,
                      }
                }
            ]
        }); 
    }
    
    /*---  Revolution Slider ----*/
    if ($('.slider02').length > 0) {
        var revapi2 = jQuery('#rev_slider_2').show().revolution({
            delay: 9000,
            responsiveLevels: [1400, 1200, 778, 480],
            gridwidth: [1320, 1140, 700, 380],
            jsFileLocation: "js/",
            sliderLayout: "fullscreen",
            minHeight: '1080',
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                arrows: {
                    style: "custom",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 60,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 60,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    style: 'custom',
                    tmp: '<span></span>',
                    direction: 'horizontal',
                    rtl: false,

                    container: 'slider',
                    h_align: 'center',
                    v_align: 'bottom',
                    h_offset: 0,
                    v_offset: 60,
                    space: 18,

                    hide_onleave: false,
                    hide_onmobile: true,
                    hide_under: 1000,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200
                }
            },
            parallax: {
                type: 'mouse+scroll',
                origo: 'slidercenter',
                speed: 800,
                levels: [5, 10, 15, 20, 25, 30, 35, 40,
                    45, 46, 47, 48, 49, 50, 51, 55],
                disable_onmobile: 'on'
            }
        });
    }
    if ($('.slider01').length > 0) {
        var revapi2 = jQuery('#rev_slider_1').show().revolution({
            delay: 9000,
            responsiveLevels: [1400, 1200, 778, 480],
            gridwidth: [1320, 1140, 700, 380],
            jsFileLocation: "js/",
            sliderLayout: "fullscreen",
            minHeight: '960',
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                arrows: {
                    style: "custom",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '',
                    left: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 60,
                        v_offset: -36
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 60,
                        v_offset: 36
                    }
                },
                bullets: {
                    enable: true,
                    style: 'custom',
                    tmp: '<span></span>',
                    direction: 'vertical',
                    rtl: false,

                    container: 'slider',
                    h_align: 'left',
                    v_align: 'center',
                    h_offset: 60,
                    v_offset: 0,
                    space: 18,

                    hide_onleave: false,
                    hide_onmobile: true,
                    hide_under: 1000,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200
                }
            },
            parallax: {
                type: 'mouse+scroll',
                origo: 'slidercenter',
                speed: 800,
                levels: [5, 10, 15, 20, 25, 30, 35, 40,
                    45, 46, 47, 48, 49, 50, 51, 55],
                disable_onmobile: 'on'
            }
        });
    }
    
    /*--------------------------------------------------------
    / 05. Portflolio Filter
    /---------------------------------------------------------*/
    if($('#mixGrid').length > 0){
        $('#mixGrid').themeWar();
    }
     if ($("#shaff_grid").length > 0) {
        var $grid = $('#shaff_grid');

        var Shuffle = window.Shuffle;
        var element = document.querySelector('#shaff_grid');
        var sizer = element.querySelector('.shafSizer');

        var shaff_inst = new Shuffle(element, {
            itemSelector: '.shaff_item',
            sizer: sizer // could also be a selector: '.my-sizer-element'
        });
        $('.filterShafUL li').on('click', function () {
            $('.filterShafUL li').removeClass('active');
            $(this).addClass('active');
            var groupName = $(this).attr('data-group');
            shaff_inst.filter(groupName);
        });
    }
    
    /*--------------------------------------------------------
    / 06. Counter
    /---------------------------------------------------------*/
    $('.timer').appear();
    $(document.body).on('appear', '.timer', function(e, $affected) {
        $affected.each(function() {
            var $this = $(this);
            if(!$this.hasClass('appeared')){
                jQuery({Counter: 0}).animate({Counter: $this.attr('data-count')}, {
                    duration: 3000,
                    easing: 'swing',
                    step: function () {
                        var num = Math.ceil(this.Counter).toString();
                        $this.html(num);
                    }
                });
                $this.addClass('appeared');
            }
        });
    });
    
    /*--------------------------------------------------------
    / 07. Page Banner Paralax
    /---------------------------------------------------------*/
    if ($('#scene_1').length > 0) {
        $('#scene_1').parallax();
    }

    /*------------------------------------------------------
    /  08. All Popup
    /------------------------------------------------------*/
    if ($imgPopup.length > 0) {
        $imgPopup.lightcase({
            transition: 'elastic',
            showSequenceInfo: false,
            slideshow: false,
            swipe: true,
            showTitle: false,
            showCaption: false,
            controls: true
        });
    }
    if ($videoPoppup.length > 0) {
        $videoPoppup.lightcase({
            transition: 'elastic',
            showSequenceInfo: false,
            slideshow: false,
            swipe: true,
            showTitle: false,
            showCaption: false,
            controls: true
        });
    }

    /*--------------------------------------------------------
    / 09. Back To Top
    /---------------------------------------------------------*/
    var back = $("#backtotop"),
        body = $("body, html");
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > $(window).height()) {
            back.css({ bottom: '30px', opacity: '1', visibility: 'visible' });
        } else {
            back.css({ bottom: '-30px', opacity: '0', visibility: 'hidden' });
        }
    });
    body.on("click", "#backtotop", function (e) {
        e.preventDefault();
        body.animate({ scrollTop: 0 }, 800);
        return false;
    });
    
    
    /*--------------------------------------------------------
    / 10. Preloader
    /---------------------------------------------------------*/
    $(window).on('load', function () {
        var preload = $('#preloader');
        if (preload.length > 0) {
            preload.delay(500).fadeOut('slow');
        }
    });

    /*--------------------------------------------------------
    / 11. Sticky Header
    /---------------------------------------------------------*/
    $(window).on('scroll', function () {
        var heights = $(window).height();
        if ($(window).scrollTop() > heights) {
            $(".isSticky").addClass('fixedHeader animated slideInDown');
        } else {
            $(".isSticky").removeClass('fixedHeader animated slideInDown');
        }
    });
    
    /*--------------------------------------------------------
    / 12. Header Search
    /---------------------------------------------------------*/
    $searchToggler.on('click', function(e){
        e.preventDefault();
        $('.header01Search').addClass('active');
    });
    $cancleSearch.on('click', function(e){
        e.preventDefault();
        $('.header01Search input').val('');
        $('.header01Search').removeClass('active');
    });
    $('.shareToggler').on('click', function(e) {
        e.preventDefault();
        $(this).siblings('.headerSocial').toggleClass('active');
        $('.shareToggler').toggleClass('active');
    });

    /*----------------------------------------------------------
    / 13. Contact Form Submission
    /----------------------------------------------------------*/
    $('#contact_form').on('submit', function (e) {
        e.preventDefault();
        var $this = $(this);

        $('button[type="submit"]', this).attr('disabled', 'disabled').val('Processing...');
        var form_data = $this.serialize();
        var required = 0;
        $(".required", this).each(function () {
            if ($(this).val() === ''){
                $(this).addClass('reqError');
                required += 1;
            } else{
                if ($(this).hasClass('reqError'))
                {
                    $(this).removeClass('reqError');
                    if (required > 0)
                    {
                        required -= 1;
                    }
                }
            }
        });
        if (required === 0) {
            $.ajax({
                type: 'POST',
                url: 'mail/mail.php',
                data: {form_data: form_data},
                success: function (data) {
                    $('button[type="submit"]', $this).removeAttr('disabled').val('Message');

                    $('.con_message', $this).fadeIn().html('<strong>Congratulations!</strong> Your query successfully sent to site admin.').removeClass('alert-warning').addClass('alert-success');
                    setTimeout(function () {
                        $('.con_message', $this).fadeOut().html('').removeClass('alert-success alert-warning');
                    }, 5000);
                }
            });
        } else {
            $('button[type="submit"]', $this).removeAttr('disabled').val('Message');
            $('.con_message', $this).fadeIn().html('<strong>Opps!</strong> Errpr found. Please fix those and re submit.').removeClass('alert-success').addClass('alert-warning');
            setTimeout(function () {
                $('.con_message', $this).fadeOut().html('').removeClass('alert-success alert-warning');
            }, 5000);
        }
    });
    $(".required").on('keyup', function () {
        $(this).removeClass('reqError');
    });

    /*--------------------------------------------------------
    / 14. Google Maps
    /----------------------------------------------------------*/
    if ($("#googleMap").length > 0){
        var map;
        map = new GMaps({
            el: "#googleMap",
            lat: 45.354450,
            lng: -95.802650,
            zoom: 8,
        });
        var image = "";
        map.addMarker({
            lat: 45.354450,
            lng: -95.802650,
            icon: "images/marker.png",
            animation: google.maps.Animation.DROP,
            verticalAlign: "bottom",
            horizontalAlign: "center",
            backgroundColor: "#d3cfcf"
        });
        var styles = [
            {
                "featureType": "road",
                "stylers": [
                    {"color": "#898989"}
                ]
            }, {
                "featureType": "water",
                "stylers": [
                    {"color": "#cad9be"}
                ]
            }, {
                "featureType": "landscape",
                "stylers": [
                    {"color": "#edeae2"}
                ]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [
                    {"color": "#121212"}
                ]
            }, {
                "featureType": "poi",
                "stylers": [
                    {"color": "#99b3cc"}
                ]
            }, {
                "elementType": "labels.text",
                "stylers": [
                    {"saturation": 1},
                    {"weight": 0.1},
                    {"color": "#121212"}
                ]
            }

        ];
        map.addStyle({
            styledMapName: "Styled Map",
            styles: styles,
            mapTypeId: "map_style"
        });

        map.setStyle("map_style");
    }

    /*--------------------------------------------------------
    / 15. Mobile Menu
    /---------------------------------------------------------*/
    $('.mainMenu ul li.menu-item-has-children > a, .mainMenu2 ul li.menu-item-has-children > a').on('click', function(e){
        e.preventDefault();
        $(this).siblings('ul').slideToggle();
    });
    $('.menu_btn, .menu_btn02').on('click', function(e){
        e.preventDefault();
        $('.mainMenu, .mainMenu2').slideToggle();
        $(this).toggleClass('active');
    });
    
    
})(jQuery)