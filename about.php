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
    <title>Про нас</title>
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
<div class="content-wrapper about-wrapper">
    <div class="container">
        <div class="row">

            <!--CONTENT BLOCK-->
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
                <main>
                    <article class="article">
                        <div class="article-body">
                            <p><strong class="blue-brand">Благодійний фонд «Разом до майбутнього»</strong> був
                                створений у лютому 2012 року. Мета Фонду – відродження духовних цінностей, вирішення
                                соціальних проблем на основі стратегічного партнерства суспільства, держави та
                                бізнесу. Місія Фонду – досягати результату кожною дією та проектом, підтримка
                                обдарованих і інтелектуальних людей, тих, хто здатний змінюватися і готовий
                                допомагати іншим, сформувати суспільне середовище, де цінностями є творчість,
                                професіоналізм і активність.</p>
                            </div>
                            <ul class="list-unstyled property">
                                <li>
                                    <h3>Принципи</h3>
                                </li>
                                <li><strong>Відкритість</strong> - працюємо для кожного і з кожним у середовищі
                                    комунікації
                                    толерантності та об’єктивного інформування.
                                </li>
                                <li>
                                    <strong>Ефективність</strong> – використовуємо новітні технології
                                    міжнародного
                                    та українського
                                    досвіду благодійної діяльності: кожна справа з метою, кожна дія з
                                    результатом.
                                </li>
                                <li>
                                    <strong>Публічність</strong> – діємо за відкритими правилами, створюємо
                                    однакові
                                    умови для всіх
                                    учасників проектів і програм Фонду.
                                </li>
                            </ul>

                            <ul class="list-unstyled property">
                                <li>
                                    <h3>Цінності</h3>
                                </li>
                                <li><strong>Духовність.</strong> Кожна душа вимірюється
                                    розміром свого
                                    стремління.
                                    Ми
                                    прагнемо до відродження краси, сили духу та
                                    гармонії українського
                                    суспільства.
                                    Це цілком можливо, якщо кожен з нас пам’ятатиме, що
                                    Людина є Світ і її
                                    почуття -
                                    його буття.
                                </li>
                                <li>
                                    <strong>Розвиток.</strong> Почни з себе, і світ
                                    зміниться довкола! Пріоритет
                                    самовдосконалення врятує суспільство від таких
                                    хвороб як лінь, егоїзм та
                                    байдужість. Ми постійно розвиваємося для того, аби
                                    мобільно та оперативно
                                    реагувати на проблеми, які вирішуємо.
                                </li>
                                <li>
                                    <strong>Довіра.</strong> Ми приймаємо відкритих
                                    людей та віддаємо свою
                                    відкритість. Наша команда вірить і довіряє, адже
                                    глибока віра сама по собі
                                    велика сила. Об’єднавшись і довіряючи ми
                                    непереможні.
                                </li>
                            </ul>

                    </article>
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
