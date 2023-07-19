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
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Makar Store </title>
	</head>
	<style>
					body {
						background-image: url("img/fon.jpg");
						background-repeat: no-repeat;
						background-position: center center;
						background-attachment: fixed;
						-webkit-background-size: cover;
						-moz-background-size: cover;
						-o-background-size: cover;
						background-size: cover;
					}

					</style>
		<body>
		<?php require "block/header.php" ?>
								<div class="mb-3 container">
									<h1 style="text-align:center; color:#0000FF">FAQs</h1>
								</div>
                <div class="mt-5 container">
                <form action="check.php" method="post">
                  <input type="email" name="email" placeholder="Enter your email" class="mb-2 form-cotrol"><br>
                  <textarea name="message" class="mb-1 form-control" placeholder="Enter your message"></textarea><br>
                  <button type="submit" name="send" class="mb-2 btn btn-success">Send message</button>
                </form>
              </div>
						<?php require "block/about.php" ?>
		</body>
</html>
