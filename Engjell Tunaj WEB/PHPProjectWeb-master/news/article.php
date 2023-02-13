<?php
include("../includes/dbh.php");
include("../includes/functions.php");

$id = $_GET["id"];
if (!$id) {
    header("Location: ./news");
    exit();
}

$query = "SELECT * FROM news WHERE id = ?";
$result = executeSql($conn, $query, "i", $id);

$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>1</title>
    <link href="../index.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php include_once("../header.php") ?>
    <main role="main">
        <div class="background"
            style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/img/news-<?php echo $row["id"] ?>.jpg); justify-content: flex-end;">
            <h1 class="m-5">
                <span class="text-warning">
                    <?php echo $row["title"] ?>:
                </span>
            </h1>
        </div>
        <div class="custom-flex m-5">
            <p class="lead">
                <?php echo $row["content"] ?>
            </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>