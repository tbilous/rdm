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
//CALENDAR
    var eventData = [
        {"date": "2015-10-01", "badge": false, "title": "Example 1"},
        {"date": "2015-10-02", "badge": true, "title": "Example 2"}
    ];
    $(document).ready(function () {
        $("#my-calendar").zabuto_calendar({
            language: "ua",
            cell_border: false,
            today: true,
            weekstartson: 1,
            show_days: true,
            nav_icon: {
                prev: '<span class="glyphicon glyphicon-menu-left"></span>',
                next: '<span class="glyphicon glyphicon-menu-right"></span>'
            },
            data: eventData
        });
    });
//BOOTSTRAP HOVER DROPDOWN-MENU
    $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
        $(this).addClass('active');
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
        $(this).removeClass('active');
    });
//ACTIVATE PARENT DROPDOWN HREF
    $('.navbar .dropdown > a').click(function () {
        location.href = this.href;
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

    //SET MASTER HEIGHT FOR SLAVE
    function master() {
        var masterHeight = $('.nav-video-wrapper').height();
        $(window).on('resize', function () {
            var masterHeight = $('.nav-video-wrapper').height();
            $('.slave').css('height', masterHeight + 'px');
        });
        $('.slave').css('height', masterHeight + 'px');
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

    $('.video-start').click(function () {
        var videoID = $(this).data('video');
        $(".video-content-wrapper iframe.slave").remove();
        $('<iframe  class="slave" allowfullscreen></iframe>')
            .attr("src", "http://www.youtube.com/embed/" + videoID + '?rel=0&amp;hd=1;autoplay=1')
            .appendTo(".video-content-wrapper");
        master();
    });

//COLLAPSED ARTICLE
/*    $('.collapsed-text').readmore({
        collapsedHeight: 190,
        speed: 500,
        moreLink: '<a class="blue-brand colllapsed-link" href="#">Розгорнути <small><span class="glyphicon glyphicon-menu-right"></span></small></a>',
        lessLink: '<a class="blue-brand colllapsed-link" href="#">Згорнути <small><span class="glyphicon glyphicon-menu-right"></span></small></a>'

    });*/
});