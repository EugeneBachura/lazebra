$("#kiagallerySlider").slick({
    speed: 200,
    dots: false,
    mobileFirst: true,
    infinite: true,
    variableWidth: true,
    arrows: true,
    autoplay: false,
    nextArrow: $(".kiagallery__slick-next"),
    prevArrow: $(".kiagallery__slick-prev"),
    responsive: [
      {
        breakpoint: 0,
        settings: {
          slidesToShow: 2
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        },
      },
      {
        breakpoint: 1090,
        settings: {
          slidesToShow: 3
        },
      },
      {
        breakpoint: 1420,
        settings: {
          slidesToShow: 4
        },
      },
    ],
  });