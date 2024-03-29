$('#bigbannerSlider, #bigbannerSlider1, #bigbannerSlider2, #bigbannerSlider3, #bigbannerSlider4').slick({
    slidesToShow: 1,
    mobileFirst: true,
    autoplay: true,
    infinite: true, 
    autoplaySpeed: 5000,
    variableWidth: true,
    arrows: false,
    dots: true,
    customPaging : function(slider, i) {
        return '<div class="dot"></div>';
        },
    responsive: [
        {
            breakpoint: 0,
            settings: {
            }
        },
        {
            breakpoint: 768,
            settings: {
            }
        },
        {
            breakpoint: 1090,
            settings: {
            }
        },
        {
            breakpoint: 1420,
            settings: {
            }
        }
      ]
});

