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
include 'header.php';
?>
<?php
include 'modal.php';
?>
<?php
include 'modalemail.php';
?>
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/avatar.jpg" style="width: 70%">
        </div>
        <div class="col-md-6">
            <p>Добрый день, пользователь</p>
            <p>Желаете изменить логин или пароль?</p>
            <div class="lkinp">
                <input type="text" class="form-control" id="username" placeholder="Логин">
            </div>
            <div class="lkinp">
                <input type="password" class="form-control" id="password" placeholder="Пароль">
            </div>
            <div class="lkinp">
                <a href="lk.php" class="btn btn-primary w-100" style="background-color: #4170B7">Изменить</a>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 300px"></div>


</body>
</html>

<?php
include 'footer.php';
?>