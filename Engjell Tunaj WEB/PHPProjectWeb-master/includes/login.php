<?php

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    echo "1234";
    $password = $_POST["password"];

    require_once 'functions.php';
    require_once 'dbh.php';


    if (emptyInputLogin($username, $password) !== false) {
        header("Location: ../login.php?error=emptyinput");
        exit();

    }
    loginUser($conn, $username, $password);
} else {
    header("Location:../login.php");
    exit();

}