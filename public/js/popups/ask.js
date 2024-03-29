$('.ask-btn').magnificPopup({
    type:'inline',
    midClick: true,
    showCloseBtn:false,
    closeOnBgClick:false
});
$('.popup-ask__close-btn').on( "click", function() {
    $.magnificPopup.close();
});