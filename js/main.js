jQuery(document).ready(function($) {

    var $window = $(window),
    $nav = $('#main-nav');

    $('#toggle-menu').click(function(event) {
		event.preventDefault();
        $nav.toggleClass('responsive');
    });

    $('.toggle').click(function() {
        $nav.removeClass('responsive');
    });

    $( '.link-icon a' ).hover( function() {
        $(this).toggleClass('hovered');
    });

    $('#fullpage').fullpage({
        anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
        menu: '#scroll-menu'
    });

    function resize() {
        if ($window.width() > 1024) {
            return $nav.removeClass('responsive');
        };
        if ($window.height() < 481) {
            return $nav.addClass('small-height');
        } else {
    	    return $nav.removeClass('small-height');
        }
    };

    $window
        .resize(resize)
        .trigger('resize');

});    
