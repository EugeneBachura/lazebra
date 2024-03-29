$('.gallery-items').each(function() { 
    $(this).magnificPopup({
        delegate: 'a', 
        type: 'image',
        midClick: true,
        showCloseBtn:false,
        closeOnBgClick:false,
        gallery: {
          enabled:true
        },
        callbacks: {
            buildControls: function() {
              this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
            }
          }
    });
});
$('.gallery-items__close-btn').on( "click", function() {
    $.magnificPopup.close();
});