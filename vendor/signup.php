<?php
session_start();
require_once 'connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

$error_fields = [];

if($login === ''){
    $error_fields[] = 'login';
}

if($password === ''){
    $error_fields[] = 'password';
}

if($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error_fields[] = 'email';
}

if($password_confirm=== ''){
    $error_fields[] = 'password_confirm';
}

if($full_name === ''){
    $error_fields[] = 'full_name';
}

if(!empty($error_fields)){
    $response = [
        'status' => false,
        'type' => 1,
        'message' => 'Проверьте правильность полей',
        'fields' => $error_fields
    ];

    echo json_encode($response);

    die();
}

if($password === $password_confirm){

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`) VALUES (NULL, '$full_name', '$login', '$email', '$password')");
//    $_SESSION['message'] = 'Регистрация прошла успешно';
//    header('Location: ../index.php');

    $response = [
        'status' => true,
        'message' => 'Регистрация прошла успешно'
    ];

    echo json_encode($response);

}else{
//    $_SESSION['message'] = 'Пароли не совпадают';
//    header('Location: ../register.php');

    $response = [
        'status' => false,
        'message' => 'Пароли не совпадают'
    ];

    echo json_encode($response);

}