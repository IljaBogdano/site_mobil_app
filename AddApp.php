<! DOCTYPE html>
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
        <div align="center">
					<form action="functions/newapp.php" method="post" enctype="multipart/form-data" style="text-align:center;padding-top:100px;width:600px">
          <img class="mb-4" src="img/makar.jpg" alt="" width="100" height="70">
          <h1 class="h3 mb-3 fw-normal">Form for adding New Applications</h1>
          <div class="form-floating">
            <input name="Name_App" type="login" class="form-control" placeholder="name@example.com">
            <label for="floatingInput">Name Applications</label>
          </div>
					<div class="mb-4">
						<label>Photo Applications</label>
							<input type="file" name="Picture" multiple>
					</div>
					<div class="mb-4">
						<label>Add file Applications</label>
						<input type="file" name="Exe_App" multiple>
					</div>
          <div class="mb-4">
          </div>
          <button class="mb-5 btn btn-lg btn-primary" type="submit">Add New Applications</button>
      	<a type="button" href="main.php" class="mb-5 btn btn-lg btn-primary">Back</a>
        </form>
			</div>
    </body>
</html>
