<?php
include 'config/general_config.php';
$_SESSION['isLoggedIn'] = true;
$_SESSION['username'] = "asyraf";
header('Location: shop.php');
