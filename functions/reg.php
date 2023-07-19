<?php
  $connect = mysql_connect('localhost', 'root', '');
  mysql_select_db("kurs", $connect) or die( mysql_error());

  $FIO=$_POST['FIO'];
  $Login=$_POST['Login'];
  $Password=$_POST['Password'];
  // $Password=md5($Password);

$request = "INSERT INTO user (idUs, FIO, Login, Password) VALUES (NULL, '$FIO', '$Login', md5('$Password'))";
$result = mysql_query($request);
  mysql_close($connect);
  $_SESSION['message'] = 'You have successfully registered';
  header('location: ../log.php');
 ?>
