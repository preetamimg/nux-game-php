$('.testiomnialCarousel').owlCarousel({
    loop: true,
    items: 4,
    margin: 15,
    nav: false,
    dots: true,
    autoplay: true,
    center: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        576: {
            items: 1.3,
            nav: false
        },
        768: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        },
        1299: {
            items: 3,
            nav: false
        },
        1499: {
            items: 3,
            nav: false
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

