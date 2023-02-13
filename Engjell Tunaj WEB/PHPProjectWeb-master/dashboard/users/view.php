<?php
require('../../includes/dbh.php');
include("../auth.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>View Users</title>
    <link rel="stylesheet" href="css/style.css" />
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
        <h2>View Users</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>UserId</strong></th>
                    <th><strong>UserName</strong></th>
                    <th><strong>UsersEmail</strong></th>
                    <th><strong>UsersUid</strong></th>
                    <th><strong>UsersPwd</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sel_query = "SELECT * from users ORDER BY usersId desc;";
                $result = mysqli_query($conn, $sel_query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td align="center">
                            <?php echo $row["usersId"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["usersName"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["usersEmail"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["usersUid"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["usersPwd"]; ?>
                        </td>


                        <td align="center">
                            <a href="edit.php?id=<?php echo $row["usersUid"]; ?>">Edit</a>
                        </td>
                        <td align="center">
                            <a href="delete.php?id=<?php echo $row["usersUid"]; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>