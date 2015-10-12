// Avoid `console` errors in browsers that lack a console.
(function () {
    var method;
    var noop = function () {
    };
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

$(document).ready(function () {
//BOOTSTRAP HOVER DROPDOWN-MENU
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
        $(this).addClass('active');
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
        $(this).removeClass('active');
    });
//DEFEND IFRAME FROM MOUSE WILL
    $(function () {
        $('.map').hover(function () {
                stopScroll();
            },
            function () {
                $('.map iframe').css("pointer-events", "none");
            });
    });

    function stopScroll() {
        $('.map').click(function () {
            $('.map iframe').css("pointer-events", "auto");
        });
    }
    function master() {
        var masterHeight = $('.nav-video-wrapper').height();
        $(window).on('resize', function(){
            var masterHeight = $('.nav-video-wrapper').height();
            $('.slave').css('height', masterHeight+'px');
        });
        $('.slave').css('height', masterHeight+'px');
    }
    master();
    window.onresize = master();

//VIDEO
    function thumbsBg() {
        $(".video-start").each(function () {
            var videoID = $(this).data('video');
            $(this).css('backgroundImage', 'url(http://img.youtube.com/vi/' + videoID + '/0.jpg)')
        });
    }
    window.onload = thumbsBg;

    $('.video-start').click(function(){
        var videoID = $(this).data('video');
        $(".video-content-wrapper iframe.slave").remove();
        $('<iframe  class="slave" allowfullscreen></iframe>')
            .attr("src", "http://www.youtube.com/embed/" + videoID + '?rel=0&amp;hd=1;autoplay=1')
            .appendTo(".video-content-wrapper");
        master();
    });

});