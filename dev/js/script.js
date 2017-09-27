
(function() {
    if ($('.js-banner').length) {
        var mainBanner = new Swiper('.js-banner', {
            pagination: '.js-banner-pag',
            speed: 1500,
            paginationClickable: true
        });
    }
})();