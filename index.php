<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
    <style>

        body {
            position: relative;
            background: url('img/gl.png') top right no-repeat;
            background-size: 50%;
        }

    </style>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
include 'fh/header.php';
?>
<body>
<?php
include 'modal.php';
?>
<main class="container">
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <p>Контролируй свои расходы за электроэнергию</p>
    <p>и исключай возможность воровства</p>
    <br><br>
    <button class="btn btn-custom custom-size rounded-pill"  data-bs-toggle="modal" data-bs-target="#myModal">Присоединиться</button>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <div class="row">
        <div class="col-md-3">
            <img src="img/Group%2031.png" alt="Изображение 1">
        </div>
        <div class="col-md-3">
            <img src="img/Group%2032.png" alt="Изображение 2">
        </div>
        <div class="col-md-2">
            <img src="img/Group%2033.png" alt="Изображение 3">
        </div>
    </div>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
    <br><br>
</main>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Первая половина разделена на две части -->
            <div class="row">
                <div class="col-md-6">
                    <img src="img/Group%2034.png" alt="Изображение левой части">
                </div>
                <div class="col-md-6">
                    <img src="img/Group%2035.png" alt="Изображение правой части">
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <img src="img/Group%20169.png" alt="Изображение второй половины">
            </div>
        </div>

        <div class="col-md-6">
            <!-- Вторая половина страницы с изображением -->
            <h2 style="color: #4170B7">АО "ННПО им. М.В. Фрунзе" </h2>
            <br>
            <p style="font-size: 18px">Нижегородское научно-производственное объединение имени М.В.Фрунзе – это разработчик и производитель современных
                высокотехнологичных радиоэлектронных приборов военного и гражданского назначения.</p>
            <br>
            <p style="font-size: 18px">Сертификация системы менеджмента качества предприятия подтверждена сертификатом
                Системы сертификации «Военный регистр» о соответствии стандартам ГОСТ Р ИСО 9001-2015 и ГОСТ РВ 0015-002-2012.</p>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p style="font-size: 18px">Лицензия на осуществление деятельности по изготовлению и ремонту средств измерений, выданная Федеральным агентством по техническому регулированию и метрологии. </p>
                    <p><a href="#" style="color: #FD7C58; font-size: 15px">Перейти на официальный сайт</a></p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/image%2014.png" alt="Изображение левой части">
                        </div>
                        <div class="col-md-6">
                            <img src="img/image%2015.png" alt="Изображение правой части">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>
<div style="background: url('img/kub.png') top no-repeat; text-align: center; font-size: 14px;">
    <div class="container">
        <br><br><br><br>
        <h2 style="color: white">Тарифы на электроэнергию в Архангельской области </h2>
        <br><br><br><br>
        <div class="rectangle">
            <table class="table table-bordered table-no-border">
                <thead>
                <tr style="border-top: none;">
                    <th scope="col">№</th>
                    <th scope="col">Период</th>
                    <th scope="col">Одноставочный тариф, кВт.ч</th>
                    <th colspan="2" scope="col">
                        Дифференцированный тариф по двум зонам суток
                        <div class="subheader-container">
                            <div class="subheader">дневная зона (с 7 до 23 часов), кВт.ч</div>
                            <div class="subheader">ночная зона (с 23 до 7 часов), кВт.ч</div>
                        </div>
                    </th>
                    <th scope="col">Документ, устанавливающий тарифы</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>01.01.20 — 30.06.20</td>
                    <td>4.91	руб за 1 кВт.ч
                    </td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" style="color:blue ;">Постановление от 13 декабря 2019 г. № 81-э/30 </a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч
                    </td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" style="color:blue ;">Постановление от 13 декабря 2019 г. № 81-э/30 </a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч
                    </td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" style="color:blue ;">Постановление от 13 декабря 2019 г. № 81-э/30 </a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч
                    </td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" style="color:blue ;">Постановление от 13 декабря 2019 г. № 81-э/30 </a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч
                    </td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" style="color:blue ;">Постановление от 13 декабря 2019 г. № 81-э/30 </a></td>
                </tr>
                <tr style="border-bottom: none;">
                    <td>6</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч
                    </td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" style="color:blue ;">Постановление от 13 декабря 2019 г. № 81-э/30 </a></td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <!-- Первая половина разделена на две части -->
            <div class="row">
                    <img src="img/Group%2050.png" alt="Изображение правой части">
            </div>
            <br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
            <!-- Вторая половина страницы с изображением -->
            <h2>Актуальные новости</h2>
            <br><br>
            <h5>Тариф на электроэнергию для квартир с электроплитами: как получить льготу?</h5>
            <br><br>
            <p>Если плита на кухне электрическая, а не газовая, то тариф на электроэнергию будет ниже на 30%. Это своего рода льгота, которая предоставляется жильцами, чтобы компенсировать им более высокий расход электричества. И вот вопрос: как собственнику квартиры этот самый льготный тариф получить? Давайте разберемся...</p>
            <div class="row">
                <div class="col-md-6">
                    <p><a href="full.php" style="color: #5d5d5d; font-style: italic">Подробнее --></a></p>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <p style="color: #5d5d5d;">13.03.2020</p>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <button class="btn btn-custom2 custom-size rounded-pill" style="text-align: center" onclick="window.location.href='news.php'">Все новости</button>
                </div>

            </div>
        </div>
    </div>
</div>
<br><br><br><br>
<div style="background: url('img/kub2.png') bottom no-repeat;">
    <div class="container">
        <br><br>
        <div class="rectangle">
            <div class="row">
                <div class="col-md-6" style="font-size: 14px">
                    <br><br>
                    <!-- Первая половина разделена на две части -->
                    <h2>О компании</h2>
                    <br><br>
                    <p style="font-size: 16px">ООО “ЭНСА” ведет установку и обслуживание системы АИИС КУЭ на базе КТС “МАЯК”.</p>
                    <p style="font-size: 16px">С нашей помощью СНТ, СОТы и любые граждане контролируют свои расходы за электроэнергию и исключают возможность воровства.</p>
                    <p style="font-size: 16px">На сайте Вы можете получить всю необходимую информацию по потребленной и оплаченной злектроэнергии</p>
                    <p style="font-size: 16px">Чтобы присоединиться или узнать подробности подключения обратитесь по адресу <a href="dm.5265@mail.ru">dm.5265@mail.ru</a> или оставить заявку на сайта и <a href="dm.5265@mail.ru"> мы свяжемся</a> с Вами.</p>
                    <br>
                </div>
                <div class="col-md-6">
                    <br><br>
                    <!-- Вторая половина страницы с изображением -->
                    <div class="row">
                        <img src="img/Group%20130.png" alt="Изображение правой части">
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

    </body>
</html>


<?php
include 'fh/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
