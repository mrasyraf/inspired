<?php

include '../config/general_config.php';
$requestData = $_POST;
$action = $_POST['action'];

if ($action == 'login') {
    
    //set session
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['username'] = $requestData['email'];
    echo 1;
    
}