<?php

session_start();

$connect = mysql_connect('localhost', 'root', '');
mysql_select_db("kurs", $connect) or die( mysql_error());

$Login=$_POST[login];
$Password=$_POST[password];
$result = mysql_query("SELECT * FROM user WHERE Login = '$Login' AND Password = md5('$Password')");
$result = mysql_num_rows($result);
  if($result>0 && $Login=='Admin')
  {
    $result1 = mysql_query("SELECT * FROM user WHERE Login = '$Login'");
    $name_app = mysql_fetch_assoc($result1);
    $_SESSION['user'] =  $name_app[FIO];
    header('location: ../app.php');

  } elseif ($result==0) {
    $_SESSION['message'] = 'Users not found';
    header('location: ../log.php');
  } elseif ($result>0 && $Login!='Admin') {
    $result1 = mysql_query("SELECT * FROM user WHERE Login = '$Login'");
    $name_app = mysql_fetch_assoc($result1);
    // echo $name_app[FIO];
    $_SESSION['user'] =  $name_app[FIO];
    header('location: ../app.php');
  }
 ?>
