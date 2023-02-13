<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main page</title>
	<link href="./index.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<?php include_once("header.php") ?>
	<main role="main" class="container">
		<div class="container">
			<h1 class="mt-5">Best gym in all of Kosovo</h1>
			<div id="carousel-gym" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="img/donut.jpg" class="d-block w-100" alt="image of donat kukaj">
					</div>
					<div class="carousel-item">
						<img src="img/woman.webp" class="d-block w-100" alt="image of a woman">
					</div>
					<div class="carousel-item">
						<img src="img/man.jpg" class="d-block w-100" alt="image of a gigachad">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carousel-gym" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carousel-gym" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</div>
		<div class="container">
			<div class="custom-flex">
				<img src="img/wheelchair.jpg" class="m-5 d-block" alt="image of a wheelchair">
				<div class="text">
					<h3 class="mt-5">Wheelchair accessible</h3>
					<p class="lead">We have everything you need to start your fitness journey from bags, outfits, locker
						room essentials and more, all at low costs! </p>
					<p> Check out our store. <a href="products.php">products</a> page</p>
				</div>
			</div>
			<div class="custom-flex">
				<img src="img/coach.png" class="m-5 d-block" alt="image of a coach">
				<div class="text">
					<h3 class="mt-5">Coaches</h3>
					<p class="lead">Our gym has many trained professionals who are willing to help you with training and
						guide you </p>
					<p> check out the <a href="about.php">about
							us</a> page for more information</p>
				</div>
			</div>
			<div class="custom-flex">
				<img src="img/engagement.png" class="m-5 d-block" alt="image of a smm">
				<div class="text">
					<h3 class="mt-5">Engaged with the community</h3>
					<p class="lead">Keep up with the latest news and the talk of the day</p>
					<p>at <a href="index.php">news</a> page</p>
				</div>
			</div>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
</body>

</html>