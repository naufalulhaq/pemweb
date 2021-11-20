<?php
require_once "connection.php";
session_start();

if(function_exists($_GET['function'])) {
    $_GET['function']();
}   

function checkCookie(){
    if isset([$_COOKIE('username')]) {
        $msg = [
            'status' = false,
        ];
    } else {
        $msg = [
            'status' = true,
            'username' => $_COOKIE['username']
        ];
    }
}

function login(){
    global $connect;

    $username = mysqli_real_escape_string($connect, $_POST['user']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $queryres = $connect->query("SELECT * FROM `account` WHERE username='$username' AND password='$password'");
    
    $result = $queryres->fetch_assoc();
    if ($result) {
        setcookie('username', $result['username'], time() - (60*60*4), '/');
        $msg = "success";
        echo json_encode($msg);
    }else{
        $msg = "failed";
        echo json_encode($msg);
    }
}

function logout(){
    setcookie('usernmae', '', time() - 3600, '/');
        $msg = "logged out";
        echo json_encode($msg);
}