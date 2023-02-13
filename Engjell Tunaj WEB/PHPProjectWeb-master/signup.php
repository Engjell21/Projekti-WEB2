<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<main>

    <body>
        <form action="includes/signup.php" method="post">
            <h1 id="registerr">Register</h1>
            <input type="text" placeholder="Name" id="name" name="name" class="name"><br>
            <label style="color: red;" for="Name" id="nameMessage"></label><br>
            <input type="text" placeholder="Username" id="surname" name="username" class="surname"><br>
            <label style="color: red;" for="Surname" id="nameMessages"></label><br>
            <input type="email" placeholder="Email" id="email" name="email" class="emaili"><br>
            <label style="color: red;" for="Surname" id="emailMessage"></label><br>

            <input type="password" placeholder="Enter Password" id="password" name="password" class="paswordi"><br>
            <input type="password" placeholder="Re-enter Password" id="passwordi" name="password" class="paswordire">

            <button type="submit" class="butoni" id="register" value="register" name="submit">Sign Up</button>

        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {

                echo "<p>Fill in all fields</p>";

            } else if ($_GET["error"] == "iinvalidemail") {
                echo "<p>Chose a proper email</p>";

            } else if ($_GET["error"] == "invalidpassword") {
                echo "<p>password dont match</p>";

            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Chose a proper username</p>";

            } else if ($_GET["error"] == "stmtfailure") {
                echo "<p>Something went wrong</p>";

            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Chose another username</p>";

            } else if ($_GET["error"] == "none") {
                echo "<p>You have signed in</p>";

            }
        }
        ?>
        <!-- <script>
            var nameRegex = /^[A-Z][a-z]{2-10}/;
            var surnameRegex = /^[A-Z][a-z]{2-10}/;
            var emailRegex = /^w+[._-]?\w+@[a-z]\.[a-z]{2-3}/;
            var registerButton = document.getElementById("register");
            var nameMsg = document.getElementById("nameMessage");
            var surnameMsg = document.getElementById("nameMessages");
            var emailMsg = document.getElementById("emailMessage");
            registerButton.addEventListener("click", function (event) {
                var name = document.getElementById("name").value;
                var surname = document.getElementById("surname").value;
                var email = document.getElementById("email").value;
                if (name == "") {
                    nameMsg.innerText = "Fill Name"
                    event.preventDefault();
                }
                else {
                    if (nameRegex.test(name)) {
                        alert("Name:" + name);
                    } else {
                        nameMsg.innerText = "Correct"
                        event.preventDefault();
                    }
                }
                if (surname == "") {
                    surnameMsg.innerText = "Fill Surname"
                    event.preventDefault();
                }
                else {
                    if (surnameRegex.test(surname)) {
                        alert("Surname:" + surname);
                    } else {
                        surnameMsg.innerText = "Correct"
                        event.preventDefault();
                    }
                }
                if (email == "") {
                    emailMsg.innerText = "Fill Email"
                    event.preventDefault();
                }
                else {
                    if (emailRegex.test(email)) {
                        alert("Email:" + email);
                    } else {
                        emailMsg.innerText = "Correct"
                        event.preventDefault();
                    }
                }
            }

            )
        </script>
    </body>
 -->
</main>
</body>

</html>