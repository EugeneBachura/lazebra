$('#main-slider').slick({
    slidesToShow: 1,
    mobileFirst: true,
    autoplay: true,
    infinite: true, 
    autoplaySpeed: 50000,
    variableWidth: true,
    customPaging : function(slider, i) {
        return '<div class="dot"></div>';
        },
    responsive: [
        {
            breakpoint: 0,
            settings: {
                dots: false,
                arrows: false,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: true
            }
        },
        {
            breakpoint: 1090,
            settings: {
                arrows: true,
                dots: true
            }
        },
        {
            breakpoint: 1420,
            settings: {
                arrows: true,
                dots: true
            }
        }
      ]
});

$('#firstDifferencesContent').slick({
    slidesToShow: 1,
    mobileFirst: true,
    autoplay: false,
    infinite: true,
    arrows: false,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 0,
            settings: {
                dots: true,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                dots: false,
                slidesToShow: 5
            }
        },
        {
            breakpoint: 1090,
            settings: {
                dots: false,
                slidesToShow: 5
            }
        },
        {
            breakpoint: 1420,
            settings: {
                dots: false,
                slidesToShow: 5
            }
        }
      ]
});
$('#secondDifferencesContent').slick({
    slidesToShow: 1,
    mobileFirst: true,
    autoplay: false,
    infinite: true,
    arrows: false,
    variableWidth: true,
    variableHeight: true,
    responsive: [
        {
            breakpoint: 0,
            settings: {
                dots: true,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                dots: false,
                slidesToShow: 5
            }
        },
        {
            breakpoint: 1090,
            settings: {
                dots: false,
                slidesToShow: 5
            }
        },
        {
            breakpoint: 1420,
            settings: {
                dots: false,
                slidesToShow: 5
            }
        }
      ]
});