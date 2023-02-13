<?php

function emptyInputSignup($name, $email, $username, $password, $rptPassword)
{
    return empty($name) || empty($email) || empty($username) || empty($password) || empty($rptPassword);
}

function invalidUid($username)
{
    return !preg_match('/^[a-zA-Z0-9]*$/', $username);
}

function invalidEmail($email)
{
    return !filter_var($email, FILTER_VALIDATE_EMAIL);
}

function pwdMatch($rptPassword, $password)
{
    return $rptPassword !== $password;
}

function executeSql($conn, $query, $types, ...$items)
{
    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $query);
    mysqli_stmt_bind_param($stmt, $types, ...$items);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);

    return $result;
}

function getUser($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

    $result = executeSql($conn, $sql, "ss", $username, $email);

    if ($result) {
        return mysqli_fetch_assoc($result);
    }

    header("Location: signup.php?error=stmtfailure");
    exit();
}

function getNews($conn, $id)
{
    $sql = "SELECT * FROM news WHERE id = ?";

    $result = executeSql($conn, $sql, "s", $id);

    if ($result) {
        return mysqli_fetch_assoc($result);
    }

    return null;
}

function createNews($conn, $title, $content)
{
    $sql = "INSERT INTO news (title, content) VALUES (?, ?)";

    executeSql($conn, $sql, "ss", $title, $content);
}

function createUser($conn, $name, $email, $username, $password)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

    $result = executeSql($conn, $sql, "ssss", $name, $email, $username, $hashedpwd);
    if (!$result) {
        header("Location: signup.php?error=stmtfailure");
        exit();
    }

    header("Location: ../login.php");
}

function emptyInputLogin($username, $password)
{
    return empty($username) || empty($password);
}


function loginUser($conn, $username, $password)
{
    $user = getUser($conn, $username, null);
    if (!$user) {
        header("Location: ../login.php?error=Wronglogin");
        exit();
    }

    $pwdhashed = $user["usersPwd"];
    $checkPwd = password_verify($password, $pwdhashed);

    if (!$checkPwd) {
        header("Location: ../kodi.php?error=Wronglogin");
        exit();
    }

    session_start();
    $_SESSION["usersId"] = $user["usersId"];
    $_SESSION["usersUid"] = $user["usersUid"];
    if ($user["admin"]) {
        $_SESSION["admin"] = true;
    }

    header("Location: ../index.php");
}