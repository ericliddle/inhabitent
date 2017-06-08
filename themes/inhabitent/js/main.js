(function ($) {
    $('.search-form').hide();
    $('.fa-search').click(function (e) {
        e.preventDefault();

        $('.search-form').animate({ width: 'toggle' }, 350);
        $('.search-form').focus();
    });
    $('.search-form').blur(function () {
        $('.search-form').animate({ width: 'hide' }, 350);
    });
})(jQuery);