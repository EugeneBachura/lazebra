$('.header__login-btn').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-login__close-btn').on( "click", function() {
    $.magnificPopup.close();
});