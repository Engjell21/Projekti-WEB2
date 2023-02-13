<?php
require('../..includes/dbh.php');
require('../..includes/functions.php');

$id = $_REQUEST['id'];
$query = "DELETE FROM users WHERE usersUid = ?";

executeSql($conn, $query, "s", $id);

header("Location: view.php");
?>