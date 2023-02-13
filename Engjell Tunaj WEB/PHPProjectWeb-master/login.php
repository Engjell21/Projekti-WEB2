<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="kodi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<main>

    <body>
        <?php include_once("header.php") ?>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<p>Fill in all fields</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>incorrect login information/p>";
            }
        }
        ?>
        <form action="includes/login.php" method="post">
            <h1>Log In</h1>

            <input type="text" placeholder="Username" id="username" name="username" class="username"><br>
            <label style="color: red;" for="Name" id="usernameMessage"></label><br>

            <input type="password" placeholder="Enter Password" id="password" name="password" class="paswordi"><br>
            <div class="aa">Forgot Password?</div>


            <button type="submit" class="butoni" id="login" value="login" name="submit">Log In</button>
            <div class="signup">Not a member? <a href="signup.php">Sign Up</a></div>

        </form>
    </body>
</main>
</body>

</html>