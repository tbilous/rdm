<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="ru"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>RDM Home page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


<?php include 'header.php' ?>
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Контакти</h2>
            </div>
        </div>
    </div>
</div>
<!--MAIN  SECTION-->
<div class="content-wrapper contacts-wrapper">
    <div class="container">
        <div class="row">

            <!--CONTENT BLOCK-->
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
                <main>
                    <article class="article">
                        <h2 class="article-heading under-line-icon">Про нас</h2>

                        <div class="article-body">
                            <div class="map" id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1390.9133801562925!2d28.658428712926508!3d50.255585609031364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472c64947487b9ff%3A0xcb97cdf783d002a6!2z0LLRg9C7LiDQmtC40ZfQstGB0YzQutCwLCAzLCDQltC40YLQvtC80LjRgCwg0JbQuNGC0L7QvNC40YDRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1444555520205"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </article>
                    <ul class="list-unstyled bottom-contacts">
                        <li class="bottom-social blue icon-address">м. Житомир, вул. Київська, 3</li>
                        <li class="bottom-social blue icon-phone">
                            <div>+38 (0412)-46-83-02</div>
                            <div>+380991720505</div>
                        </li>
                        <li class="bottom-social blue icon-fax">+380960008585</li>
                        <li class="bottom-social blue icon-mail">razom.dm@gmail.com</li>
                        <li class="bottom-social blue icon-site">dm.in.ua</li>
                    </ul>
                </main>
            </div>
            <!--RIGHT ASIDE-->
            <div class="col-sm-4 col-md-3 col-lg-2  hidden-xs">
                <aside class="right-aside" id="right-menu">
                    <?php include 'aside-right.php' ?>
                </aside>
            </div>
        </div>
    </div>
</div>

<!--FOOTER-->
<?php include 'footer.php' ?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/zabuto_calendar.min.js"></script>

<script src="js/plugins.min.js"></script>
<script src="js/main.js"></script>


<script>
    $('.carousel').carousel({
        interval: false
    });
    $('.home-nav-tabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })

</script>
<script type="application/javascript">
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
</script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
