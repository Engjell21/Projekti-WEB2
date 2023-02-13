<?php

if (isset($_POST['submit'])) {
    echo "It works";

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rptPassword = $_POST['password'];

    require_once 'dbh.php';
    require_once 'functions.php';

    if (emptyInputSignup($name, $email, $username, $password, $rptPassword) !== false) {
        header("Location: ../signup.php?error=emptyinput");
        exit();

    }
    if (invalidUid($username) !== false) {
        header("Location: ../signup.php?error=InvalidUid");
        exit();

    }
    if (invalidEmail($email) !== false) {
        header("Location: ../signup.php?error=invalidEmail");
        exit();
    }
    if (pwdMatch($password, $rptPassword) !== false) {
        header("Location: ../signup.php?error=invalidpasswords");
        exit();
    }
    if (getUser($conn, $username, $email) !== null) {
        header("Location: ../signup.php?error=UsernameTaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
} else {
    header("Location: ../signup.php");
}