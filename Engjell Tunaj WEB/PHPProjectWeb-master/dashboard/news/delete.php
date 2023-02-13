<?php
require('../../includes/dbh.php');
require('../../includes/functions.php');

$id = $_REQUEST['id'];
$query = "DELETE FROM news WHERE id = ?";

executeSql($conn, $query, "i", $id);

header("Location: view.php");
?>