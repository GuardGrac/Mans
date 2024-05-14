const swiper = new Swiper('.mySwiper', {
    slidesPerView: 1,
    spaceBetween: 40,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    breakpoints: {
    700: {
    slidesPerView: 2,
    spaceBetween: 50,
    loop: true,
    },
    800: {
    slidesPerView: 2,
    spaceBetween: 55,
    loop: true,
    },
    900: {
    slidesPerView: 2,
    spaceBetween: 65,
    loop: true,
    },
    1000: {
    slidesPerView: 2,
    spaceBetween: 75,
    loop: true,
    },
    1100: {
    slidesPerView: 2,
    spaceBetween: 80,
    loop: true,
    },
    1200: {
    slidesPerView: 3,
    spaceBetween: 100,
    loop: true,
    },
    1536: {
    slidesPerView: 4,
    spaceBetween: 20,
    loop: true,
    }   
    }});