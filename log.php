
<!doctype html>
<html>
  <head>
 <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Sing-in</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main>
  <div align="center">
  <form action="functions/singup.php" method="post" style="text-align:center;padding-top:100px;width:600px">
    <img class="mb-4" src="img/makar.jpg" alt="" width="100" height="70">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
      <input name="login" type="login" class="form-control" placeholder="name@example.com">
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="mb-4">
    </div>
    <button class="mb-5 btn btn-lg btn-primary" type="submit">Sign in</button>
	<a type="button" href="main.php" class="mb-5 btn btn-lg btn-primary">Back</a>
  <p> If you don't have login - <a href="registr.php">Registrations</a> </p>
  <?php
  if($_SESSION['message']){
    echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
  }
  // unset($_SESSION['message']);
   ?>
  </form>
  <div>
</main>
  </body>
</html>
