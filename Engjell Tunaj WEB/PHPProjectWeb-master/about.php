<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About page</title>
	<link href="./index.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<?php require_once("header.php") ?>
	<main role="main">
		<div class="background"
			style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(/img/about-bg.jpg);">
			<h1 class="m-5">
				Welcome to the world of <span class="text-warning">Gym</span>
			</h1>
		</div>
		<div class="container m-5">
			<p class="lead">No matter what you're looking for in a gym, we've got a membership option made for you. All
				Fitness members enjoy unlimited access to their home club and the support of our friendly,
				knowledgeable staff anytime you need it. Black Card® members receive additional benefits, including
				the ability to bring a guest for free and access to any of our locations.</p>
			<p class="lead">Why choose our Gym?</p>
			<p class="lead">We create an environment where you can relax, go at your own pace, and do your own thing
				without ever
				having to worry about being judged.
				No need to be gymtimidated. We have a guide to help you get started, keep going and celebrate every
				step.</p>

			<h2>Our Services and Facilities</h2>
			<ul>
				<li>Cardio equipment</li>
				<li>Strength training equipment</li>
				<li>Group fitness classes</li>
				<li>Personal training</li>
			</ul>

			<h2>Contact Us</h2>
			<p>We'd love to hear from you! You can reach us by phone, email, or by filling out the form below.</p>

			<h3>Phone</h3>
			<p>Phone: +38344956665</p>

			<h3>Email</h3>
			<p>Email: info@gym.com</p>

			<h3>Contact Form</h3>
			<?php
			include_once("includes/dbh.php");
			include_once("includes/functions.php");
			if (isset($_POST["name"])) {
				$name = $_POST["name"];
				$email = $_POST["email"];
				$message = $_POST["message"];

				$query = "INSERT INTO contact (name, email, message) VALUES (?, ?, ?)";

				if (empty($name) || empty($email) || empty($message)) {
					header("Location: about.php?error=EmptyFields");
					exit();
				}

				executeSql($conn, $query, "sss", $name, $email, $message);
				echo "<p style='color: green;'>Sent message!</p>";
			}
			?>
			<form action="" method="post" class="about-contact-form" onsubmit="return validateForm()" name="contact">
				<label for="name">Name:</label><br>
				<input type="text" id="name" name="name"><br>
				<label for="email">Email:</label><br>
				<input type="text" id="email" name="email"><br>
				<label for="message">Message:</label><br>
				<textarea id="message" name="message"></textarea><br>
				<input type="submit" value="Submit">
			</form>
		</div>


	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="./index.js"></script>

</body>

</html>