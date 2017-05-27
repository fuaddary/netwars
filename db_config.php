<?php
session_start();
$host = "127.0.0.1";
$user = "root";
$password = "masukmysql";
$datbase = "testing_netwars";
$bd = mysqli_connect($host,$user,$password);
mysqli_select_db($bd,$datbase);
?>