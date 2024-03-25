<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<?php
include 'fh/header.php';
?>
<?php
include 'modal.php';
?>
<body>

<div style="background: url('img/kub2.png') top no-repeat;">
    <div class="container">
        <br><br>
        <div class="row" style="text-align: center; color: white">
            <h1>Новости</h1>
            <br><br><br><br>
        </div>
        <div class="rectangle3">
            <div class="row">
                <div class="col-md-5">
                        <img src="img/Group%2050.svg" alt="Изображение правой части">
                </div>
                <div class="col-md-6" style="padding: 30px">
                    <!-- Вторая половина страницы с изображением -->
                    <h5>Тариф на электроэнергию для квартир с электроплитами: как получить льготу?</h5>
                    <br>
                    <h7>Если плита на кухне электрическая, а не газовая, то тариф на электроэнергию будет ниже на 30%.
                        Это своего рода льгота, которая предоставляется жильцами, чтобы компенсировать им более высокий расход электричества.
                        И вот вопрос: как собственнику квартиры этот самый льготный тариф получить? Давайте разберемся...</h7>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <p><a href="full.php" style="color: #5d5d5d; font-style: italic">Подробнее <img src="img/Line%2014.svg"></a></p>
                        </div>
                        <div class="col-md-6" style="text-align: right">
                            <p style="color: #5d5d5d;">13.03.2020</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<br><br><br><br>
<div>
    <div class="container">
        <div class="row">
            <?php
            include 'newshref.php';
            ?>
            <?php
            include 'newshref.php';
            ?>
            <?php
            include 'newshref.php';
            ?>

        </div>
        <br>
        <div class="row">
            <?php
            include 'newshref.php';
            ?>
            <?php
            include 'newshref.php';
            ?>
            <?php
            include 'newshref.php';
            ?>
        </div>
        <br>
        <div class="row">
            <?php
            include 'newshref.php';
            ?>
            <?php
            include 'newshref.php';
            ?>
            <?php
            include 'newshref.php';
            ?>
        </div>
    </div>
</div>
<br>
<?php
include 'fh/footer.php';
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

