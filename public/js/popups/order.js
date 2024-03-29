$('#btn-popup-order').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-order__close-btn').on( "click", function() {
    $.magnificPopup.close();
});