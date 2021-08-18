<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];

$error_fields = [];

if($login === ''){
    $error_fields[] = 'login';
}

if($password === ''){
    $error_fields[] = 'password';
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

$check_user = mysqli_query($connect, "select * from users where login = '$login' and password = '$password'");

if(mysqli_num_rows($check_user) > 0){

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user']= [
        'id' => $user['id'],
        'login' => $user['login'],
        'email' => $user['email'],
        'full_name' => $user['full_name']
    ];

    $response = [
        'status' => true
    ];

    //header('Location: ../profile.php');
    echo json_encode($response);

}else{
//    $_SESSION['message'] = 'Неверный логин или пароль';
//    header('Location: ../index.php');

    $response = [
        'status' => false,
        'message' => 'Неверный логин или пароль'
    ];

    echo json_encode($response);

}