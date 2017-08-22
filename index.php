<?php
include 'config/general_config.php';
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="content-type">
        <title>Customer Self Service</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta content="" name="author">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <?php
        echo $_SESSION['username'];
        ?>
    </body>
</html>
