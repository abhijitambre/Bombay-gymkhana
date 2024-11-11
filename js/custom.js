/* -------------------------------------------------------

[ Custom settings ]

01. ScrollIt
02. Navbar scrolling background
03. Close navbar-collapse when a  clicked
04. Sections background image from data background 
05. Animations
06. YouTubePopUp
07. Testimonials owlCarousel
08. Rooms 1 owlCarousel
09. Rooms Page owlCarousel
10. Pricing owlCarousel
11. News owlCarousel
12. Team owlCarousel
13. Clients owlCarousel
14. Restaurant Menu owlCarousel
15. Restaurant Menu Tabs
16. Accordion Box (for Faqs)
17. MagnificPopup Gallery
18. Smooth Scrolling
19. Scroll back to top
20. Select2
21. Datapicker
22. Slider
23. Preloader
24. Contact Form


------------------------------------------------------- */

$(function () {
    "use strict";
    var wind = $(window);



    // ScrollIt
    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: 'swing', // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -60 // offste (in px) for fixed top navigation
    });


    // Navbar scrolling background
    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar .logo> img");
        if (bodyScroll > 100) {
            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');
        } else {
            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');
        }
    });


    // Close navbar-collapse when a  clicked
    $(".navbar-nav .dropdown-item a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });


    // Sections background image from data background
    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });


    // Animations
    var contentWayPoint = function () {
        var i = 0;
        $('.animate-box').waypoint(function (direction) {
            if (direction === 'down' && !$(this.element).hasClass('animated')) {
                i++;
                $(this.element).addClass('item-animate');
                setTimeout(function () {
                    $('body .animate-box.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight animated');
                            } else {
                                el.addClass('fadeInUp animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 200, 'easeInOutExpo');
                    });
                }, 100);
            }
        }, {
            offset: '85%'
        });
    };
    $(function () {
        contentWayPoint();
    });

    $(".intersterd").click(function () {
        $('#enquire-modal').modal('show');
    });
    // YouTubePopUp
    $("a.vid").YouTubePopUp();

    $('[data-fancybox="video"]').fancybox({
        //slide effect- zoom-in-out
        transitionEffect: "slide",
        loop: false,

        buttons: [
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            //'download'
        ],
        thumbs: {
            autoStart: false
        }
    });
    $('[data-fancybox="gallery"]').fancybox({
        //slide effect- zoom-in-out
        transitionEffect: "slide",
        loop: false,

        buttons: [
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            //'download'
        ],
        thumbs: {
            autoStart: false
        }
    });



    // Testimonials owlCarousel *
    $('.testimonials .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Testimonials owlCarousel *
    $('.services .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Rooms 1 owlCarousel *
    $('.rooms1 .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        autoplayHoverPause: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Rooms 2 owlCarousel *
    $('.rooms2 .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        autoplayHoverPause: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Rooms 3 owlCarousel *
    $('.rooms3 .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        autoplayHoverPause: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Rooms Page owlCarousel *
    $('.rooms-page .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: true,
        dots: false,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // Pricing owlCarousel *
    $('.pricing .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        autoplayHoverPause: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    // News owlCarousel *
    $('.news .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: false,
        dots: false,
        nav: true,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: true,
                nav: true
            },
            600: {
                items: 2,
                dots: true,
                nav: true
            },
            1000: {
                items: 3
            }
        }
    });


    // facilties owlCarousel *
    $('.facilties .owl-carousel').owlCarousel({
        loop: false,
        margin: 30,
        dots: true,
        mouseDrag: true,
        rewind: true,
        autoplay: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    $('.cstm-carousel').owlCarousel({
        loop: true,


        mouseDrag: true,
        rewind: true,
        autoplay: true,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,

            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });



    // Team owlCarousel *
    $('.team .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        mouseDrag: true,
        autoplay: false,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    // Clients owlCarousel *
    $('.clients .owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        mouseDrag: true,
        autoplay: true,
        dots: false,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                margin: 10,
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    // Restaurant Menu owlCarousel+3
    $('.restaurant-menuold .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        dots: false,
        nav: true,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 4
            }
        }
    });

    //  Menu img owlCarousel+3
    $('.menu-menu .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        dots: true,
        nav: true,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1
            }
        }
    });


    //  Menu img owlCarousel+3
    $('.faci-menu .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        dots: true,
        nav: true,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 2
            }
        }
    });

    // Restaurant Menu Tabs
    $(".restaurant-menu .tabs-icon").on("click", ".item", function () {
        $(".item").removeClass("active");
        var myID = $(this).attr("id");
        $(".restaurant-menu .cont").hide();
        $("#" + myID + "-content").fadeIn();
    });
    $(".restaurant-menu .tabs-icon").on("click", ".owl-item", function () {
        $(this).addClass("actived").siblings().removeClass("actived");
    });


    // Restaurant Menu owlCarousel3
    $('.restaurant-menu3 .owl-carousel').owlCarousel({
        loop: false,
        margin: 0,
        autoplay: false,
        dots: false,
        nav: true,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                loop: true,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            1000: {
                items: 3
            }
        }
    });

    // Restaurant Menu Tabs
    $(".restaurant-menu3 .tabs-icon").on("click", ".item", function () {
        $(".item").removeClass("active");
        var myID = $(this).attr("id");
        $(".restaurant-menu3 .cont").hide();
        $("#" + myID + "-content").fadeIn();
    });
    $(".restaurant-menu3 .tabs-icon").on("click", ".owl-item", function () {
        $(this).addClass("actived").siblings().removeClass("actived");
    });


    // Restaurant Menu owlCarousel2
    $('.restaurant-menu2 .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: false,
        dots: false,
        nav: true,
        navText: ["<span class='lnr ti-angle-left'></span>", "<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2
            }
        }
    });

    // Restaurant Menu Tabs
    $(".restaurant-menu2 .tabs-icon").on("click", ".item", function () {
        $(".item").removeClass("active");
        var myID = $(this).attr("id");
        $(".restaurant-menu2 .cont").hide();
        $("#" + myID + "-content").fadeIn();
    });
    $(".restaurant-menu2 .tabs-icon").on("click", ".owl-item", function () {
        $(this).addClass("actived").siblings().removeClass("actived");
    });




    // Accordion Box (for Faqs)
    if ($(".accordion-box").length) {
        $(".accordion-box").on("click", ".acc-btn", function () {
            var outerBox = $(this).parents(".accordion-box");
            var target = $(this).parents(".accordion");
            if ($(this).next(".acc-content").is(":visible")) {
                //return false;
                $(this).removeClass("active");
                $(this).next(".acc-content").slideUp(300);
                $(outerBox).children(".accordion").removeClass("active-block");
            } else {
                $(outerBox).find(".accordion .acc-btn").removeClass("active");
                $(this).addClass("active");
                $(outerBox).children(".accordion").removeClass("active-block");
                $(outerBox).find(".accordion").children(".acc-content").slideUp(300);
                target.addClass("active-block");
                $(this).next(".acc-content").slideDown(300);
            }
        });
    }


    // MagnificPopup Gallery
    $('.gallery').magnificPopup({
        delegate: '.popimg',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    $(".img-zoom").magnificPopup({
        type: "image",
        closeOnContentClick: !0,
        mainClass: "mfp-fade",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
        }
    })
    $('.magnific-youtube, .magnific-vimeo, .magnific-custom').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
    });


    // Smooth Scrolling
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]').not('[href="#0"]').click(function (event) {
            // On-page links
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

    //  Scroll back to top
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })


    // Select2
    $('.select2').select2({
        minimumResultsForSearch: Infinity,
    });


    // Datapicker
    $(".datepicker").datepicker({
        orientation: "top"
    });

});


// Slider  
$(document).ready(function () {
    var owl = $('.header .owl-carousel');

    // Slider owlCarousel - (Inner Page Slider)
    $('.slider .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        nav: false,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                dots: true
            },
            600: {
                dots: true
            },
            1000: {
                dots: true
            }
        }
    });

    // Slider owlCarousel (Homepage Slider)
    $('.slider-fade .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        nav: false,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                dots: false
            },
            600: {
                dots: false
            },
            1000: {
                dots: false
            }
        }
    });
    owl.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2; // Position of the current item
        $('span').removeClass('animated fadeInUp');
        $('h4').removeClass('animated fadeInUp');
        $('h1').removeClass('animated fadeInUp');
        $('p').removeClass('animated fadeInUp');
        $('.butn-light').removeClass('animated fadeInUp');
        $('.butn-dark').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('span').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h4').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.butn-light').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.butn-dark').addClass('animated fadeInUp');
    });
});


// Preloader
$("#preloader").fadeOut(700);
$(".preloader-bg").delay(700).fadeOut(700);
var wind = $(window);


// Contact Form
var form = $('.contact__form'),
    message = $('.contact__msg'),
    form_data;
// success function
function done_func(response) {
    message.fadeIn().removeClass('alert-danger').addClass('alert-success');
    message.text(response);
    setTimeout(function () {
        message.fadeOut();
    }, 2000);
    form.find('input:not([type="submit"]), textarea').val('');
}
// fail function
function fail_func(data) {
    message.fadeIn().removeClass('alert-success').addClass('alert-success');
    message.text(data.responseText);
    setTimeout(function () {
        message.fadeOut();
    }, 2000);
}
form.submit(function (e) {
    e.preventDefault();
    form_data = $(this).serialize();
    $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: form_data
    }).done(done_func).fail(fail_func);
});




function genpass() {


    document.getElementById("gen-form").style.display = "block";
    document.getElementById("log-form").style.display = "none";
    // $("#otp-sub").removeAttr('disabled')

}



function returnlog() {


    document.getElementById("gen-form").style.display = "none";
    document.getElementById("log-form").style.display = "block";
    // $("#otp-sub").removeAttr('disabled')

}



// let deferredPrompt;
// const addBtn = document.querySelector('.add-button');
// addBtn.style.display = 'none';

// window.addEventListener('beforeinstallprompt', (e) => {
//     // Prevent Chrome 67 and earlier from automatically showing the prompt
//     e.preventDefault();
//     // Stash the event so it can be triggered later.
//     deferredPrompt = e;
//     // Update UI to notify the user they can add to home screen
//     addBtn.style.display = 'block';

//     addBtn.addEventListener('click', (e) => {
//         // hide our user interface that shows our A2HS button
//         addBtn.style.display = 'none';
//         // Show the prompt
//         deferredPrompt.prompt();
//         // Wait for the user to respond to the prompt
//         deferredPrompt.userChoice.then((choiceResult) => {
//             if (choiceResult.outcome === 'accepted') {
//                 console.log('User accepted the A2HS prompt');
//             } else {
//                 console.log('User dismissed the A2HS prompt');
//             }
//             deferredPrompt = null;
//         });
//     });
// });



// Jquery Mobile Validation
jQuery.validator.addMethod("country", function (value, element) {
    return this.optional(element) || /^[^+]/.test(value);
}, "Enter Number Without Country Code");
// jQuery.validator.addMethod("number", function(value, element) {
//     return this.optional(element) || value.match(/^[1-9][0-9]*$/);
// }, "Please enter the number without beginning with '0'");
jQuery.validator.addMethod("intlinput", function (value, element) {
    return this.optional(element) || jQuery(element).intlTelInput("isValidNumber");
}, "Please enter a valid mobile number");
jQuery.validator.addMethod("alphabets", function (value, element) {
    return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
}, "Please enter Alphabets only");
jQuery.validator.addMethod("email", function (value, element) {
    return this.optional(element) || /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
}, "Please enter a valid email address.");
jQuery.validator.addMethod("valueNotEquals", function (value, element, arg) {
    return arg !== value;
}, "Value must not equal arg.");

if (jQuery('#enquire').length > 0) {
    jQuery('#enquire').validate({
        rules: {
            clientid1: {
                required: true,
                minlength: 1,
                maxlength: 4
            },
            clientid2: {
                required: true,

                minlength: 1,
                maxlength: 6
            },
            clientid3: {
                required: true,

                minlength: 2,
                maxlength: 2
            },
            pass: {
                required: true,

            },
        },
        messages: {
            clientid1: {
                required: "Enter ID"
            },
            clientid2: {
                required: "Enter ID"
            },
            clientid3: {
                required: "Enter ID"
            },
            pass: {
                required: "Enter Password"
            }

        }
    });
}



if (jQuery('#genpass-form').length > 0) {
    jQuery('#genpass-form').validate({
        rules: {
            clientid1reset: {
                required: true,
                minlength: 1,
                maxlength: 2
            },
            clientid2reset: {
                required: true,

                minlength: 1,
                maxlength: 3
            },
            clientid3reset: {
                required: true,

                minlength: 2,
                maxlength: 2
            },
            passreset: {
                required: true,

            },
        },
        messages: {
            clientid1reset: {
                required: "Enter ID"
            },
            clientid2reset: {
                required: "Enter ID"
            },
            clientid3reset: {
                required: "Enter ID"
            },
            passreset: {
                required: "Enter Password"
            }

        }
    });
}




if (jQuery('#alliance-form').length > 0) {
    jQuery('#alliance-form').validate({
        rules: {
            fname: {
                required: true,
                maxlength: 100
            },
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            email: {
                required: true,
                email: true
            },
            company: {
                required: true
            },
            project: {
                valueNotEquals: ""
            }
        },
        messages: {
            fname: {
                required: "Enter Your Name"
            },
            mobile: {
                required: "Enter Your Number"
            },
            email: {
                required: "Enter Your Email"
            },
            company: {
                required: "Enter Company Name"
            },
            project: {
                valueNotEquals: "Please select project"
            }
        }
    });
}




if (jQuery('#callme-form').length > 0) {
    jQuery('#callme-form').validate({
        rules: {
            mobile: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            }
        },
        messages: {
            mobile: {
                required: "Enter Your Number"
            }
        }
    });
}

$(document).ready(function () {
    var CookieValue = Cookies.get('memberdet');
    const obj = JSON.parse(CookieValue);
    var CategoryName = obj.Result[0].CategoryName;

    if (
        CategoryName === "CLUB ACCOUNT" ||
        CategoryName === "PERMANENT MEMBER" ||
        CategoryName === "PERMANENT COMMUTED" ||
        CategoryName === "LIFE MEMBER" ||
        CategoryName === "LADY PERMANENT MEMBER"
    ) {
        $(".agm-notice").addClass("show");
    }
});