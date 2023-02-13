<?php
require('../includes/dbh.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="form">
        <p>
            <a href="../index.php">Home</a>
            | <a href="index.php">Dashboard</a>
            | <a href="users/view.php">View Users</a>
            | <a href="news/view.php">View News</a>
            | <a href="news/create.php">Create News</a>
            | <a href="../includes/logout.php">Logout</a>
        </p>
        <h2>Welcome to the Admin Dashboard</h2>
    </div>
</body>

</html>