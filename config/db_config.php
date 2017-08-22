<?php
/**
 * database for local
 */

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'laravel';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to database');
