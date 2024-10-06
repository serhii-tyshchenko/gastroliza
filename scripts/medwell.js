
jQuery(document).ready(function($) {
    jQuery('.teamcarousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            500: {
                items: 2,
                margin: 15
            },
            768: {
                items: 3,
                margin: 15
            },
            1103: {
                items: 4
            },
            1600: {
                items: 4
            }
        }
    })
    jQuery(document).ready(function($){
        var owl = $('.teamcarousel');
        owl.owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        with:350,
        responsive: {
            0: {
                dotsEach: 1,
                items: 1
            },
            767: {
                dotsEach: 1,
                items: 2,
                margin: 15,
            },
            1000: {
                dotsEach: 1,
                items: 3,
            }
        }
    });
    setTimeout(function(){owl.trigger('refresh.owl.carousel');},1000);
    // Function to trigger Owl Carousel refresh
    function refreshOwl() {
        owl.trigger('refresh.owl.carousel');
    }

    // Call refreshOwl when the carousel becomes visible or on window resize
    jQuery(window).on('resize scroll', function() {
        refreshOwl();
    });

    // Call refreshOwl when the element containing the carousel becomes visible
    jQuery('.teamcarousel').on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function() {
        refreshOwl();
    });
    });
    jQuery('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    jQuery('.testimonial-carousel-2').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    })
    jQuery(document).ready(function($){
        var owl = $('.blog-carousel');
        owl.owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        with:350,
        responsive: {
            0: {
                dotsEach: 1,
                items: 1
            },
            767: {
                dotsEach: 1,
                items: 2,
                margin: 15,
            },
            1000: {
                dotsEach: 1,
                items: 3,
            }
        }
    });
    setTimeout(function(){owl.trigger('refresh.owl.carousel');},1000);
    // Function to trigger Owl Carousel refresh
    function refreshOwl() {
        owl.trigger('refresh.owl.carousel');
    }

    // Call refreshOwl when the carousel becomes visible or on window resize
    jQuery(window).on('resize scroll', function() {
        refreshOwl();
    });

    // Call refreshOwl when the element containing the carousel becomes visible
    jQuery('.blog-carousel').on('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function() {
        refreshOwl();
    });
    });
    jQuery('#search i').click(function(){
        jQuery('#search').submit();
    });
})


