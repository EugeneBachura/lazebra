$('.header__location').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-cities__close-btn').on( "click", function() {
    $.magnificPopup.close();
});