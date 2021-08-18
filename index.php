<?php
session_start();
?>

<!doctype html>
<html lang="ru">
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <form>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/register.php">Зарегистрируйтесь</a>!
        </p>
            <p class = "msg none" >Неверный пароль</p>

    </form>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</body>
</html>