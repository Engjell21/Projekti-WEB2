<?php
require('../../includes/dbh.php');
include("../auth.php");
require_once('../../includes/functions.php');
$id = $_REQUEST['id'];
$row = getNews($conn, $id);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit News</title>
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
        <h1>Edit News</h1>
        <?php
        if (isset($_POST['new']) && $_POST['new'] == 1) {
            $id = $_REQUEST['id'];
            $title = $_REQUEST["title"];
            $content = $_REQUEST["content"];

            executeSql($conn, "UPDATE news SET title = ?, content = ? WHERE id = ?", "ssi", $title, $content, $id);

            $status = "News Updated Successfully. </br></br><a href='view.php'>View Updated News</a>";
            echo '<p style="color:green;">' . $status . '</p>';
        } else {
            ?>
            <div>
                <form name="form" method="post" action="">
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                    <p>
                        <span>
                            News ID:
                            <?php echo $row["id"] ?>
                        </span>
                    </p>
                    <p>
                        <input type="text" name="title" required value="<?php echo $row['title']; ?>" />
                    </p>
                    <p>
                        <textarea name="content" required><?php echo $row['content'] ?></textarea>
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