<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = "sql305.infinityfree.com";
    $username = "if0_35442397";
    $password = "MpZLoCpQeHa7CE";
    $db_name = "if0_35442397_db_tesla";
    $port = 3306;

    $conn = mysqli_connect($host, $username, $password, $db_name, $port);
    if (!$conn){
        die("Database Connection Error : " . mysqli_connect_error());
    }
?>