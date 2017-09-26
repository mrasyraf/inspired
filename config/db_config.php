<?php

/**
 * database config
 */
$serverAddr = $_SERVER['SERVER_ADDR'];

if($serverAddr == "127.0.0.7") {
    $dbhost = 'sql103.epizy.com';
    $dbuser = 'epiz_20644238';
    $dbpass = 'Fatihah289';
    $dbname = 'epiz_20644238_db';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to prod database');
} else {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'laravel';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to local database');
}

