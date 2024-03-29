$("#brandSlider").slick({
    useTransform: false,
    dots: false,
    mobileFirst: true,
    infinite: true,
    variableWidth: true,
    arrows: true,
    autoplay: false,
    nextArrow: $(".brandlist__slick-next"),
    prevArrow: $(".brandlist__slick-prev"),
    responsive: [
      {
        breakpoint: 0,
        settings: {
          slidesToShow: 3
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 5
        },
      },
      {
        breakpoint: 1090,
        settings: {
          slidesToShow: 7
        },
      },
      {
        breakpoint: 1420,
        settings: {
          slidesToShow: 9
        },
      },
    ]
  }
  );