<?php

$servername = "localhost";
$dBusername = "root";
$dBpassword = "";
$dBname = "phpproject";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}