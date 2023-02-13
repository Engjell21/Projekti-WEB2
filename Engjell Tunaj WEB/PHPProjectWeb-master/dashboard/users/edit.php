<?php
require('../../includes/dbh.php');
include("../auth.php");
require_once('../includes/functions.php');
$id = $_REQUEST['id'];
$row = getUser($conn, $id, null);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit User</title>
</head>

<body>
    <div class="form">
        <p>
            <a href="../../index.php">Home</a>
            | <a href="../index.php">Dashboard</a>
            | <a href="view.php">View Users</a>
            | <a href="../news/view.php">View News</a>
            | <a href="../news/create.php">Create News</a>
            | <a href="../includes/logout.php">Logout</a>
        </p>
        <h1>Edit User</h1>
        <?php
        if (isset($_POST['new']) && $_POST['new'] == 1) {
            $id = $_REQUEST['id'];
            $usersName = $_REQUEST["usersName"];
            $usersEmail = $_REQUEST["usersEmail"];
            $usersUid = $_REQUEST["usersUid"];

            $result = executeSql($conn, "UPDATE users SET usersName = ?, usersEmail = ?, usersUid = ? WHERE usersId = ?", "ssss", $usersName, $usersEmail, $usersUid, $id);

            $status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
            echo '<p style="color:green;">' . $status . '</p>';
        } else {
            ?>
            <div>
                <form name="form" method="post" action="">
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['usersId']; ?>" />
                    <p>
                        <span>
                            User ID:
                            <?php echo $row["usersId"] ?>
                        </span>
                    </p>
                    <p>
                        <input type="text" name="usersName" required value="<?php echo $row['usersName']; ?>" />
                    </p>
                    <p>
                        <input type="text" name="usersEmail" required value="<?php echo $row['usersEmail']; ?>" />
                    </p>
                    <p>
                        <input type="text" name="usersUid" required value="<?php echo $row['usersUid']; ?>" />
                    </p>
                    <p>
                        <input name="submit" type="submit" value="Update" />
                    </p>
                </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>