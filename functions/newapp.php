<?php

session_start();

$connect = mysql_connect('localhost', 'root', '');
mysql_select_db("kurs", $connect) or die( mysql_error());

$file_name = $_POST['Name_App'];

$path_p = time() .$_FILES[Picture][name];
if(!move_uploaded_file($_FILES[Picture][tmp_name], '../img/' . $path_p)){
  $_SESSION['message'] = 'Error file Picture';
  header('location: ../AddApp.php');
}

$path_p1 = time() .$_FILES[Exe_App][name];
if(!move_uploaded_file($_FILES[Exe_App][tmp_name], '../files/' . $path_p1)){
  $_SESSION['message'] = 'Error exe file';
  header('location: ../AddApp.php');
}

$request = "INSERT INTO `application`(`idAp`, `NameAp`, `Pictudes`, `file`) VALUES (NULL, '$file_name', '$path_p', '$path_p1')";
$result = mysql_query($request);
 $_SESSION['message'] = 'All ok';
header('location: ../AddApp.php');
mysql_close($connect);
?>
