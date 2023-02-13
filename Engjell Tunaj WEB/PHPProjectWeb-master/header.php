<?php
if (!isset($_SESSION)) {
    session_start();
}


$is_homepage = strpos($_SERVER['REQUEST_URI'], "news") === false;

$homePath = $is_homepage ? "./" : "../";
$newsPath = $is_homepage ? "news/" : "./";
?>
<header>
    <nav id="mainNavbar" class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/index.php" target="_blank" id="brand_name">Gym</a>

            <button class="navbar-toggler" id="navbar-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#navLinks" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navLinks">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?php echo $homePath ?>about.php" id="about">About</a>
                    <a class="nav-link" href="<?php echo $newsPath ?>index.php" id="news">News</a>
                    <a class="nav-link" href="<?php echo $homePath ?>products.php" id="products">Products</a>
                    <?php if (!isset($_SESSION["usersId"])) { ?>
                        <a class="nav-link btn btn-warning" href="<?php echo $homePath ?>login.php" id="login">Login</a>
                        <a class="nav-link btn btn-warning" href="<?php echo $homePath ?>signup.php"
                            id="register">Register</a>
                    <?php } else if (isset($_SESSION["admin"])) { ?>
                            <a class="nav-link btn btn-warning" href="<?php echo $homePath ?>dashboard/index.php"
                                id="register">Dashboard</a>
                    <?php } ?>
                </div>
            </div>

        </div>
    </nav>
</header>