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
            | <a href="../users/view.php">View Users</a>
            | <a href="view.php">View News</a>
            | <a href="create.php">Create News</a>
            | <a href="../includes/logout.php">Logout</a>
        </p>
        <h2>View Users</h2>
        <table width="100%" border="1" style="border-collapse:collapse;">
            <thead>
                <tr>
                    <th><strong>ID</strong></th>
                    <th><strong>Title</strong></th>
                    <th><strong>Content (Snippet)</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sel_query = "SELECT * FROM news ORDER BY id desc;";
                $result = mysqli_query($conn, $sel_query);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td align="center">
                            <?php echo $row["id"]; ?>
                        </td>
                        <td align="center">
                            <?php echo $row["title"]; ?>
                        </td>
                        <td align="center">
                            <?php echo substr($row["content"], 0, 200); ?>
                        </td>

                        <td align="center">
                            <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                        </td>
                        <td align="center">
                            <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>