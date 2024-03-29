$(document).scroll(function() {
    if ( $('.ask-btn').offset().top+400 > $('.footer').offset().top ) {
        $('.ask-btn').fadeOut('show');
    };
    if ($(document).scrollTop()+1000 < $('.footer').offset().top) {
        $('.ask-btn').fadeIn('show');
    }
});