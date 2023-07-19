<?php
session_start();
 ?>
<! DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Makar Store </title>
	</head>
					<style>
					body {
						background-image: url("img/fon1.jpg");
						background-repeat: no-repeat;
					  background-position: center center;
					  background-attachment: fixed;
					  -webkit-background-size: cover;
					  -moz-background-size: cover;
					  -o-background-size: cover;
					  background-size: cover;
					}
					.opa {
					opacity: .8;
					}
					</style>
		<body>
			<?php require "block/header.php" ?>
			<div class="opa position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 fw-normal">Download now</h1>
		<p class="lead fw-normal">Our website is designed for quick and convenient review and download of mobile applications.</p>
		<a class="btn btn-outline-secondary" href="app.php" style="background-color:red; border-color:blue; color:black">Let's get started</a>
		</div>
		<div class="product-device shadow-sm d-none d-md-block"></div>
		<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<div>

	<?php require "block/about.php" ?>
		</body>
</html>
