document.addEventListener('DOMContentLoaded', function () {
    const specialistsSwiper = new Swiper('#specialistsSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: false,
        grabCursor: true,

        navigation: {
            nextEl: '.specialists__arrow--next',
            prevEl: '.specialists__arrow--prev',
        },
        watchOverflow: true,
        pagination: {
            el: '.specialists__dots',
            clickable: true,
        },

        breakpoints: {
            500: {slidesPerView: 1, spaceBetween: 20},
            501: {slidesPerView: 2, spaceBetween: 20},
            768: {slidesPerView: 2, spaceBetween: 20},
            1024: {slidesPerView: 3, spaceBetween: 20},
            1280: {slidesPerView: 4, spaceBetween: 20}
        },

        speed: 600,
        a11y: {enabled: true},
        keyboard: {enabled: true}
    });

    const promotionsSwiper = new Swiper('#promotionsSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.promotions__nav-btn--next',
            prevEl: '.promotions__nav-btn--prev',
        },
        breakpoints: {
            768: {slidesPerView: 1, spaceBetween: 0},
            1024: {slidesPerView: 2, spaceBetween: 20},
            1280: {slidesPerView: 2, spaceBetween: 20},
        }
    });
});