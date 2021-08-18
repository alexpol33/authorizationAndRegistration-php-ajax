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
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>Фио</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя" >
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Почта</label>
    <input type="text" name="email" placeholder="Введите адрес своей почты" >
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password"  name="password_confirm" placeholder="Подтвердите пароль">
    <button class="register-btn">Зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт?- <a href="/">Авторизуйтесь</a>!
    </p>
    <p class="msg none">
        lorem ipsum
    </p>

</form>

<script src="js/jquery-3.6.0.js"></script>
<script src="js/app.js"></script>
</body>
</html>