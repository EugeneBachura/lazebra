$('#btn-popup-subscription').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-subscription__close-btn').on( "click", function() {
    $.magnificPopup.close();
});