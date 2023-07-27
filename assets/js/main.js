jQuery(document).ready(function($) {
  $('.pwp-testimonials-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: 'linear'
  });

  $(".loading-bar").slick({
    centerMode: true,
    // centerPadding: "80px",
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    transformEnabled: false,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: 'linear'
  });

  $('#pwp-header').spSticyheader({
    scrollHeader: 200
  })
  
});
