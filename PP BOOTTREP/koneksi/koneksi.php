<?php

$server = 'localhost:8111';
$user = 'root';
$password = '';
$database = 'bootphp';

$connect = mysqli_connect($server, $user, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>