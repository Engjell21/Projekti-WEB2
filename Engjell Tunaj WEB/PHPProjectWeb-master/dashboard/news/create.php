<?php
require('../../includes/dbh.php');
include("../auth.php");
require_once('../../includes/functions.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create News</title>
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
        <h1>Create News</h1>
        <?php
        if (isset($_POST['new']) && $_POST['new'] == 1) {
            $title = $_REQUEST["title"];
            $content = $_REQUEST["content"];

            createNews($conn, $title, $content);

            $status = "News created. </br></br><a href='view.php'>View News</a>";
            echo '<p style="color:green;">' . $status . '</p>';
        } else {
            ?>
            <div>
                <form name="form" method="post" action="">
                    <input type="hidden" name="new" value="1" />
                    <p>
                        <input type="text" name="title" required placeholder="Title" />
                    </p>
                    <p>
                        <textarea name="content" placeholder="Article content" required></textarea>
                    </p>
                    <p>
                        <input name="submit" type="submit" value="Create" />
                    </p>
                </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>