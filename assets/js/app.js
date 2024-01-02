jQuery(document).ready(function ($) {

  const primaryDayOffersSwiper = new Swiper('.primary-day-offers-swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: false,
    speed: 1200,
    loop: false,
    allowTouchMove: false,
    navigation: {
      nextEl: '.primary-day-offers-navigation__button--next',
      prevEl: '.primary-day-offers-navigation__button--prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
    },
  });

  const dayOffersSwiper = new Swiper('.day-offers-swiper', {
    slidesPerView: 2,
    spaceBetween: 20,
    autoplay: false,
    speed: 1200,
    allowTouchMove: false,
    navigation: {
      nextEl: '.day-offers-navigation__button--next',
      prevEl: '.day-offers-navigation__button--prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
    },
  });


  const bestOfferSwiper = new Swiper('.best-offers-swiper', {
    slidesPerView: 5.5,
    spaceBetween: 40,
    autoplay: true,
    speed: 1200,
    navigation: {
      nextEl: '.best-offers-navigation__button--next',
      prevEl: '.best-offers-navigation__button--prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 5.5,
      },
      1600: {
        slidesPerView: 5.5,
      },
    },
  });

  const recommendationsOfferSwiper = new Swiper('.recommendations-offers-swiper', {
    spaceBetween: 21,
    autoplay: true,
    speed: 1200,
    navigation: {
      nextEl: '.recommendations-navigation__button--next',
      prevEl: '.recommendations-navigation__button--prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
      1600: {
        slidesPerView: 5,
      },
    },
  });

  const bestSellerSwiper = new Swiper('.best-seller-swiper', {
    slidesPerView: 8,
    spaceBetween: 20,
    autoplay: true,
    speed: 1200,
    navigation: {
      nextEl: '.best-seller-swiper-navigation__button--next',
      prevEl: '.best-seller-swiper-navigation__button--prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 6,
      },
      1600: {
        slidesPerView: 7,
      },
      1800: {
        slidesPerView: 8,
      },
    },
  });

  const savingAreaSwiper = new Swiper('.saving-area-swiper', {
    slidesPerView: 6,
    spaceBetween: 20,
    autoplay: true,
    speed: 1200,
    navigation: {
      nextEl: '.saving-area-swiper-navigation__button--next',
      prevEl: '.saving-area-swiper-navigation__button--prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
      1400: {
        slidesPerView: 5,
      },
      1700: {
        slidesPerView: 6,
      },
    },
  });

  const academicPartnersSwiper = new Swiper('.partners-academic-swiper', {
    slidesPerView: 1,
    speed: 1200,
    navigation: {
      nextEl: '.partners-academic-swiper-navigation__button--next',
      prevEl: '.partners-academic-swiper-navigation__button--prev',
    },
  });

  const ecommercePartnersSwiper = new Swiper('.partners-ecommerce-swiper', {
    slidesPerView: 1,
    speed: 1200,
    navigation: {
      nextEl: '.partners-ecommerce-swiper-navigation__button--next',
      prevEl: '.partners-ecommerce-swiper-navigation__button--prev',
    },
  });

  // REMOVE SPINNER
  setTimeout(() => {
    $('.loader').fadeOut('slow');
  }, 1000);

  // MOBILE MENU EVENTS
  const openMenuBtn = document.getElementById('openMenu');
  const closeMenuBtn = document.getElementById('closeMenu');

  // openMenuBtn.addEventListener('click', function (e) {
  //   e.preventDefault();
  //   $('#mobileMenu').fadeIn('slow');
  // });
  //
  // closeMenuBtn.addEventListener('click', function (e) {
  //   e.preventDefault();
  //   $('#mobileMenu').fadeOut('slow');
  // });

  // RENDER MOBILE MENU
  // mobileNavMenuRender();

  const topButton = document.getElementById('gotToTopButton');
  const headerNav = document.querySelector('.header__mobile-nav');
  topButton.addEventListener('click', topFunction);

  window.onscroll = function () {
    scrollFunction(topButton, headerNav);
  };

  showMobileMenu();
  closeMobileMenu();
  productSliderSwiper();
  initSliderRange();
  initFancyBox();
});

function scrollFunction(topButton, headerNav) {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    topButton.style.display = 'block';
  } else {
    topButton.style.display = 'none';
  }

  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    $('.event-details__container').css('bottom', '50px');
  } else {
    $('.event-details__container').css('bottom', '-250px');
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function showMobileMenu() {
  $('.open-mobile-menu').on("click", function () {
    $(".top-mobile-menu").addClass('show');
    $("body").addClass("fixed-position");
  });
}

function closeMobileMenu() {
  $('.close-mobile-menu').on("click", function () {
    $(".top-mobile-menu").removeClass('show');
    $("body").removeClass("fixed-position");
  });
}

let productSliderSwiper = () => {

  let sliderDirection;
  let slidesNumView;

  let swiperProductsSlider;
  let swiperProductsThumbsSlider;

  if ($(window).width() <= 1024) {
    sliderDirection = 'horizontal'
    slidesNumView = 3.5
  } else {
    sliderDirection = 'vertical'
    slidesNumView = 3.5
  }

  swiperProductsThumbsSlider = new Swiper(".swiper-products-thumbs-slider", {
    loop: true,
    spaceBetween: 10,
    slidesPerView: slidesNumView,
    freeMode: true,
    watchSlidesProgress: true,
    direction: sliderDirection

  });

  swiperProductsSlider = new Swiper(".swiper-products-slider", {
    loop: true,
    thumbs: {
      swiper: swiperProductsThumbsSlider,
    },
  });

}

let initSliderRange = (initStart, initEnd) => {

  initStart = $("#from-value").val();
  initEnd = $("#to-value").val();

  $.fn.rangeSlider = function (options) {
    return $(this).slider({
      range: true,
      min: 0,
      max: 100,
      values: [initStart, initEnd]
    });
  };

  $(".slider-range").rangeSlider();

  setTimeout(() => {
    $(".slider-range").on("slide", function (event, ui) {

      let startVal = ui.values[0];
      let endVal = ui.values[1];

      console.log($(event.target).parents(".co-range-slider"))

      $(event.target).parents(".co-range-slider").find("#from-value").val(startVal)
      $(event.target).parents(".co-range-slider").find("#to-value").val(endVal)

    });
  }, 200);

}

let initFancyBox = () => {
  $('[data-fancybox]').fancybox({
    loop: true
  });

  $('[data-fancybox]').on("init", function () {
    alert("aaa")
  })

}