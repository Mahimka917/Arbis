<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
    <style>
    </style>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
include 'header.php';
?>
<body class="bodyimg">
<?php
include 'modal.php';
?>
<?php
include 'modalemail.php';
?>
<main class="container">
    <p class="main-paragraph" >Контролируй свои расходы за электроэнергию</p>
    <p>и исключай возможность воровства</p>
    <button class="btn btn-custom custom-margin" data-bs-toggle="modal" data-bs-target="#myModal">Присоединиться</button>
    <div class="main-paragraph">
        <div class="row main-paragraph">
            <div class="col-md-3 lkinp in1">
                <img src="img/in1.svg" alt="Изображение 1">
                <p class="in1">Установка и обслуживание системы </p>
            </div>
            <div class="col-md-3 lkinp in2">
                <img src="img/in2.svg" alt="Изображение 2">
                <p class="in2">Контроль за расходом электроэнергии</p>
            </div>
            <div class="col-md-3 lkinp in3">
                <img src="img/in3.svg" alt="Изображение 3">
                <p class="in3">Исключение возможности воровства</p>
            </div>
        </div>
    </div>
</main>

<div class="container main-paragraph">
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <img class="lkinp2 img-fluid" src="img/Group%2034.png" alt="Изображение левой части">
                </div>
                <div class="col-md-6">
                    <img class="lkinp2 img-fluid" src="img/Group%2035.png" alt="Изображение правой части">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <img src="img/Group%20169.png" alt="Изображение второй половины" class="max-width-image img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="company-title">АО "ННПО им. М.В. Фрунзе" </h2>
            <p class="company-description">Нижегородское научно-производственное объединение имени М.В.Фрунзе – это разработчик и производитель современных высокотехнологичных радиоэлектронных приборов военного и гражданского назначения.</p>
            <p class="company-description">Сертификация системы менеджмента качества предприятия подтверждена сертификатом Системы сертификации «Военный регистр» о соответствии стандартам ГОСТ Р ИСО 9001-2015 и ГОСТ РВ 0015-002-2012.</p>
            <br>
            <div class="row" >
                <div class="col-md-6">
                    <p class="company-description">Лицензия на осуществление деятельности по изготовлению и ремонту средств измерений, выданная Федеральным агентством по техническому регулированию и метрологии. </p>
                    <p><a href="#" class="official-website-link">Перейти на официальный сайт</a></p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="img/image%2014.png" alt="Изображение левой части" class="max-width-image">
                        </div>
                        <div class="col-md-6">
                            <img src="img/image%2015.png" alt="Изображение правой части" class="max-width-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tariffs-container tariffs-table-container">
    <div class="container">
        <br>
        <h2 class="tariffs-title">Тарифы на электроэнергию в Архангельской области </h2>
        <div class="rectangle tariffs-table-container">
            <table class="table-bordered table-no-border">
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
                    <td>4.91	руб за 1 кВт.ч</td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" class="tariff-document-link">Постановление от 13 декабря 2019 г. № 81-э/30 <img src="img/Vector.svg"></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч</td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" class="tariff-document-link">Постановление от 13 декабря 2019 г. № 81-э/30 <img src="img/Vector.svg"></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч</td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" class="tariff-document-link">Постановление от 13 декабря 2019 г. № 81-э/30 <img src="img/Vector.svg"></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч</td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" class="tariff-document-link">Постановление от 13 декабря 2019 г. № 81-э/30 <img src="img/Vector.svg"></a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч</td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" class="tariff-document-link">Постановление от 13 декабря 2019 г. № 81-э/30 <img src="img/Vector.svg"></a></td>
                </tr>
                <tr style="border-bottom: none;">
                    <td>6</td>
                    <td>01.01.19 — 30.06.19</td>
                    <td>4.91	руб за 1 кВт.ч</td>
                    <td>5.65	руб за 1 кВт.ч</td>
                    <td>1.65	руб за 1 кВт.ч</td>
                    <td><a href="#" class="tariff-document-link">Постановление от 13 декабря 2019 г. № 81-э/30 <img src="img/Vector.svg"></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <br><br>

    </div>
</div>

<div class="container tariffs-table-container">
    <div class="card col mt-5 mb-2 border-0 px-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php
                    include 'newscar.php';
                    ?>
                </div>
                <div class="carousel-item">
                    <?php
                    include 'newscar.php';
                    ?>
                </div>
                <div class="carousel-item">
                    <?php
                    include 'newscar.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col" style="text-align: right; padding-top: 30px">
            <a class="me-3" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev"><img src="img/left.png" alt=""></a>
            <a type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next"><img src="img/right.png" alt=""></a>
        </div>
    </div>
</div>

<div class="second-section-background ">
    <div class="container">
        <br><br>
        <div class="rectangle main-paragraph">
            <div class="row">
                <div class="col-md-6">
                    <br><br>
                    <!-- Первая половина разделена на две части -->
                    <h2>О компании</h2>
                    <br><br>
                    <p class="company-description">ООО “ЭНСА” ведет установку и обслуживание системы АИИС КУЭ на базе КТС “МАЯК”.</p>
                    <p class="company-description">С нашей помощью СНТ, СОТы и любые граждане контролируют свои расходы за электроэнергию и исключают возможность воровства.</p>
                    <p class="company-description">На сайте Вы можете получить всю необходимую информацию по потребленной и оплаченной злектроэнергии</p>
                    <p class="company-description">Чтобы присоединиться или узнать подробности подключения обратитесь по адресу <a class="company-email" href="mailto:dm.5265@mail.ru">dm.5265@mail.ru</a> или оставить заявку на сайта и <a class="company-email" href="dm.5265@mail.ru"> мы свяжемся</a> с Вами.</p>
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
include 'footer.php';
?>

</body>
</html>

