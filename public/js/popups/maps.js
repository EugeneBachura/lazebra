$('.contact-blocks__btn').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-map__close-btn').on( "click", function() {
    $.magnificPopup.close();
});