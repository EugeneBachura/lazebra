$('.questions__item .questions__text').slideToggle('slow');
$('.questions__item.show .questions__text').slideToggle('slow');
$('.questions__btn').click(function() {
    if ($(this).parents('.questions__item').hasClass('show')) {
        $(this).parents('.questions__item').removeClass('show');
        $(this).next().slideToggle('slow');
        $(this).parents('.questions__item').prev().removeClass('border0');
    } else {
        $('.questions__item.show .questions__text').slideToggle('slow');
        $('.questions__item.show').removeClass('show');
        $('.questions__item').removeClass('border0');
        $(this).parents('.questions__item').addClass('show');
        $(this).next().slideToggle('slow', function() {
            $("html, body").animate({scrollTop: $(this).parents('.questions__item').offset().top-100}, "slow");
        });
        $(this).parents('.questions__item').prev().addClass('border0');
    }
});

$('.questions__subtitle').click(function() {
    if ($(this).parents('.questions__item').hasClass('show')) {
        $(this).parents('.questions__item').removeClass('show');
        $(this).next().next().slideToggle('slow');
        $(this).parents('.questions__item').prev().removeClass('border0');
    } else {
        $('.questions__item.show .questions__text').slideToggle('slow');
        $('.questions__item.show').removeClass('show');
        $('.questions__item').removeClass('border0');
        $(this).parents('.questions__item').addClass('show');
        $(this).next().next().slideToggle('slow', function() {
            $("html, body").animate({scrollTop: $(this).parents('.questions__item').offset().top-100}, "slow");
        });
        $(this).parents('.questions__item').prev().addClass('border0');
    }
});