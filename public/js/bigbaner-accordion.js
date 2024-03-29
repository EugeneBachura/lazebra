$('.big-banner__content-point .big-banner__point-text').fadeOut('slow');
$('.big-banner__slider').slideToggle('slow');
//$('.big-banner__sliders').children().eq(1).fadeIn('slow');
//$('.big-banner__slider.show').slideToggle('slow');
//$('.big-banner__content-point.show big-banner__point-text').slideToggle('slow');
$('.big-banner__slider.show').fadeIn('slow');
$('.big-banner__content-point.show .big-banner__point-text').slideToggle('slow');
$('.big-banner__point-heading').click(function() {
    if ($(this).parents('.big-banner__content-point').hasClass('show')) {
        //$(this).parents('.big-banner__content-point').removeClass('show');
        //$(this).next().slideToggle('slow');
        //$('.big-banner__sliders').children().eq($(this).parents('.big-banner__content-point').index()+1).fadeOut('slow');
        //$('.big-banner__sliders').children().eq(0).fadeIn('slow');
    } else {
        $('.big-banner__content-point.show .big-banner__point-text').slideToggle('slow');
        $('.big-banner__content-point.show').removeClass('show');
        $(this).parents('.big-banner__content-point').addClass('show');
        $(this).next().slideToggle('slow');
        $('.big-banner__slider').fadeOut('slow');
        $('.big-banner__sliders').children().eq($(this).parents('.big-banner__content-point').index()+1).fadeIn('slow');
    }
});