<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная страница</title>
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/footer_header.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>


<header class="main-view mt-1" id="main">
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo1.svg" class="brand w-nav-brand">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/#about" class="nav-link nav-item-c">О предприятии</a>
                    </li>
                    <li class="nav-item">
                        <a href="/#tariff" class="nav-link nav-item-c">Тарифы</a>
                    </li>
                    <li class="nav-item ">
                        <a href="news.php" class="nav-link nav-item-c">Новости</a>
                    </li>
                    <li class="nav-item ">
                        <a href="/#contacts" class="nav-link nav-item-c">Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="#" class="btn btn-primary btus" data-bs-toggle="modal" data-bs-target="#myModal">
                    <img src="img/user.png"> Личный кабинет
                </a>
                <a href="mailto:your@email.com" class="btn btn-primary btus" data-bs-toggle="modal" data-bs-target="#messageModal">
                    <img src="img/email.png">
                </a>
            </div>
        </div>
    </nav>
</header>