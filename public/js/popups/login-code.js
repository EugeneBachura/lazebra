$('#btn-popup-login-code').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-login-code__close-btn').on( "click", function() {
    $.magnificPopup.close();
});