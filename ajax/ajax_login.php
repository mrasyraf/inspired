<?php

include '../config/general_config.php';
$requestData = $_POST;
$action = $_POST['action'];

if ($action == 'login') {
    
    //encrpyt password
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
    
    //decrypt password
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING); //$_POST['password'];
//    if (password_verify($password, $data['password'])) {
//        
//    }
    
    //set session
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['username'] = $requestData['email'];
    echo 1;
    
} else if ($action == 'resetPassword') {
    $email = $requestData['email'];
    echo 1;
}