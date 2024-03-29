$("#product-slider").slick({
  dots: false,
  mobileFirst: true,
  infinite: true,
  variableWidth: true,
  nextArrow: $(".product__slick-next"),
  prevArrow: $(".product__slick-prev"),
  responsive: [
    {
      breakpoint: 0,
      settings: {
        dots: false,
        arrows: false,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 5000,
      },
    },
    {
      breakpoint: 768,
      settings: {
        dots: false,
        arrows: false,
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 5000,
      },
    },
    {
      breakpoint: 1090,
      settings: {
        dots: false,
        arrows: false,
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 5000,
      },
    },
    {
      breakpoint: 1420,
      settings: {
        arrows: true,
        autoplay: false,
        slidesToShow: 3,
      },
    },
  ],
});
