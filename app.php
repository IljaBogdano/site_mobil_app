<?php
session_start();
if ($_SESSION['user'])
{$dis="";
} else {$dis="disabled";}?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/stile2.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<title>Makar Store </title>
	</head>
		<body>

			<?php require "block/header.php" ?>
								<div class="mb-3 container">
									<h1 style="text-align:center">All Applications</h1>
								</div>
				<div class="d-flex flex-wrap">
					<?php
					$connect = mysql_connect('localhost', 'root', '');
					mysql_select_db("kurs", $connect) or die( mysql_error());

					$request = "SELECT * FROM application";
					$result = mysql_query($request);

					$result1 = mysql_query("SELECT * FROM application");
					$num_rows = mysql_num_rows($result1);


					for ($i=0; $i <$num_rows ; $i++):
						$name_app = mysql_fetch_assoc($result);
						?>
			        <div class="card mb-4 rounded-3 shadow-sm">
			          <div class="card-header py-3">
			            <h4 class="my-0 fw-normal" style="text-align:center"><?php echo $name_app[NameAp] ?></h4>
			          </div>
								<form action="down.php" method="post">
			          <div class="card-body">
									<center>
									<img class="mb-2" src="img/<?php echo $name_app[Pictudes] ?>" alt=""  width="110" height="100">
								</center>
			            <ul class="list-unstyled mt-3 mb-4">
			            </ul>
			            <a href="down.php?id=<?php echo $name_app[idAp]; ?>" type="button" class="w-100 btn btn-lg btn-primary <?php echo $dis; ?>">Download Now</a>
			          </div>
			        </div>
				<?php endfor; ?>
			</div>
		</form>
			<?php require "block/about.php" ?>
		</body>
</html>
