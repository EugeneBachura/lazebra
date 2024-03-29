let scrolled = false;

function float_menu() {
    if (($(window).scrollTop() > 115)&&($(document).width() > 920)) {
        $('body').addClass('scroll');
        $('.header').addClass('scroll');
        $('.header__top').addClass('scroll');
        $('.slider').addClass('scroll');
        $('.header__mini-logo').addClass('scroll');
        $('.header__submenu').addClass('scroll');
        if (!scrolled) $('.header__constructor').css('margin-left', '-=44' );
        if (!scrolled) $('.header__mini-logo.scroll').css('margin-left', '-66px' );
        if (!scrolled) $('.header__nav').css('margin-left', '44px' );
        scrolled = true;
    }
    else {
        $('body').removeClass('scroll');
        $('.header').removeClass('scroll');
        $('.header__top').removeClass('scroll');
        $('.slider').removeClass('scroll');
        $('.header__mini-logo').removeClass('scroll');
        $('.header__submenu').removeClass('scroll');
        if (scrolled) $('.header__constructor').css('margin-left', '' );
        if (scrolled) $('.header__mini-logo.scroll').css('margin-left', '' );
        if (scrolled) $('.header__nav').css('margin-left', '' );
        scrolled = false;
    }
}

if (($(window).scroll() > 115)&&($(document).width() > 920)) $('.header__constructor').css('margin-left', '-=44' );
$(window).scroll(function(){
    float_menu();
});

//brand margin
$('.submenu_link1').click(function() {
    let brands = $('.header__submenu .header__brand').length;
    for (let index = brands%9; index > 0; index--) {
        $('.header__submenu').children('.header__brand').eq(brands-index).addClass('header__brand_rm');
    }   
});

//submenu
$(function () {
    $('.submenu2').addClass('load');
    $('.submenu1').addClass('load');
});
$('.header__search-btn').mouseover(function() {
    if ($(document).width() <= '0') return;
    $('.header__search-window').removeClass('start-hide');
    if ($('.header__search-btn').hasClass('active')) {
        $('.header__search-btn').removeClass('active');
        $('.header__search-window').slideUp('slow');
    } else {
        $('.header__search-btn').addClass('active');
        $('.header__search-window').slideDown('slow');
    }
  }
);
$('.submenu_link1').mouseover(function() {
    if ($(document).width() <= '1420') return;
    if ($('.submenu2').hasClass('active')) {
        $('.submenu2').removeClass('active');
        $('.submenu_link2').removeClass('active');
    }
    if ($('.submenu1').hasClass('active')) {
        $('.submenu1').removeClass('active');
        $('.submenu_link1').removeClass('active');
    } else {
        $('.submenu1').addClass('active');
        $('.submenu_link1').addClass('active');
    }
  }
);
$('.submenu1').on('mouseleave',function() {
    $('.submenu1').removeClass('active');
    $('.submenu_link1').removeClass('active');
});

$('.submenu_link2').mouseover(function() {
    if ($(document).width() <= '1420') return;
    if ($('.submenu1').hasClass('active')) {
        $('.submenu1').removeClass('active');
        $('.submenu_link1').removeClass('active');
    }
    if ($('.submenu2').hasClass('active')) {
        $('.submenu2').removeClass('active');
        $('.submenu_link2').removeClass('active');
    } else {
        $('.submenu2').addClass('active');
        $('.submenu_link2').addClass('active');
    }
  }
);
$('.submenu2').on('mouseleave',function() {
    $('.submenu2').removeClass('active');
    $('.submenu_link2').removeClass('active');
});
/* close submenu */
$('.header__mobile-submenu-btn').click(function() {
    if ($('.header__submenu').hasClass('active')) $('.header__submenu').removeClass('active')
        else $('.header__submenu').addClass('active');
    }
);

/* mobile btn menu */
$('.header__burger').click(function() {
    if ($('body').hasClass('active')) $('body').removeClass('active')
     else $('body').addClass('active');
    if ($('.header').hasClass('active')) $('.header').removeClass('active')
     else $('.header').addClass('active');
  }
);

/* user menu */
$('.header__user-menu').slideUp('slow');
$('.header__user-btn').mouseover(function() {
    if ($(document).width() <= '1090') return;
    $('.header__user-menu').removeClass('start-hide');
    if ($('.header__user-btn').hasClass('active')) {
        $('.header__user-btn').removeClass('active');
        $('.header__user-menu').slideUp('slow');
    } else {
        $('.header__user-btn').addClass('active');
        $('.header__user-menu').slideDown('slow');
    }
  }
);
$('.header__user-menu').on('mouseleave',function() {
    $('.header__user-btn').removeClass('active');
    $('.header__user-menu').slideUp('slow');
});

/* search btn */
$('.header__search-window').slideUp('slow');
$('.header__search-btn').mouseover(function() {
    if ($(document).width() <= '0') return;
    $('.header__search-window').removeClass('start-hide');
    if ($('.header__search-btn').hasClass('active')) {
        $('.header__search-btn').removeClass('active');
        $('.header__search-window').slideUp('slow');
    } else {
        $('.header__search-btn').addClass('active');
        $('.header__search-window').slideDown('slow');
    }
  }
);
$('.header__search-window').on('mouseleave',function() {
    $('.header__search-btn').removeClass('active');
    $('.header__search-window').slideUp('slow');
});

/* city dropdown*/
$(".popup-cities__search-input").on('input', function () {
    if ($(".popup-cities__search-input").val().length >= 3) {
        $(".popup-cities__search-window").removeClass('hide');
        $.ajax({
            type: 'POST',
            url: '/city',
            dataType: 'json',
            data:{
                '_token': $('meta[name="csrf-token"]').attr('content'),
                str: $(".popup-cities__search-input").val()
            },
            success: function(data, textStatus) {
                    //console.log(data, textStatus);
                   let search_window = "";
                    data.cities.forEach(element => {
                        search_window = search_window + "<li data-city='"+element.city+"'>" + element.city + " (" + element.region + ")</li>";
                    });
                    console.log(search_window);
                    $('.popup-cities__search-window ul').html(search_window); 
            },
            error: function (data, textStatus, errorThrown) {
                    //console.log(data);
            }
        });
    } else {
        $('.popup-cities__search-window ul').html("");
        //$(".popup-cities__search-window").hide("slow");
        $(".popup-cities__search-window").addClass('hide');
    }
});

/* city select */
if ($.cookie('city') != null) {
    $('.location-name').text($.cookie('city'));
};
$('.popup-cities__search-window ul').on('click', 'li', function () {
    $.cookie('city', $(this).data('city'),{ expires: 360, path: '/' });
    $('.location-name').text($(this).data('city'));
    $.magnificPopup.close();
});
$('.popup-cities__list-item').on('click', function () {
    $.cookie('city', $(this).text(),{ expires: 360, path: '/' });
    $('.location-name').text($(this).text());
    $.magnificPopup.close();
});
