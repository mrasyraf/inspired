<?php
include 'config/general_config.php';
$_SESSION['isLoggedIn'] = true;
$_SESSION['username'] = "daniel@gmail.com";
$_SESSION['name'] = "MUHAMMAD ASYRAF SUMAIL";
header('Location: index.php');
