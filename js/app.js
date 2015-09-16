// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

$.fn.getDataThumb = function(options) {
    options = $.extend({
        bgClass: 'bg-cover'
    }, options || {});
    return this.each(function() {
        var th = $(this).data('thumb');
        if (th) {
            $(this).css('background-image', 'url(' + th + ')').addClass(options.bgClass);
        }
    });
};

var planddApp = {};
(function() {
  $("*[data-thumb]").getDataThumb();
})();

/* premios recebidos */
(function() {
    $("header","#awards").clone().appendTo('#awards-mo');
    $("nav","#awards").clone().appendTo('#awards-mo');

    var carousel = $('.nav-awards','#awards-mo');
    carousel.owlCarousel({
        responsiveBaseWidth: carousel,
        responsive: true,
        responsiveRefreshRate: 200,
        pagination: true,
        autoPlay: 5000,
        rewindNav: true,
        rewindSpeed: 1000,
        loop: true,
        itemsCustom: [
            [200, 1],
            [700, 3],
            [800, 4],
        ],
        rewindNav: false,
        rewindSpeed: 300
    });
})();

