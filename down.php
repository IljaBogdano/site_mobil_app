<?php

$connect = mysql_connect('localhost', 'root', '');
mysql_select_db("kurs", $connect) or die( mysql_error());
$ap = $_GET[id];

$result = mysql_query("SELECT * FROM application WHERE idAp =$ap");
$name_app = mysql_fetch_assoc($result);
//$result = mysql_query($request);
mysql_close($connect);

$filename = "files/$name_app[file]";

function file_force_download($file) {
  if (file_exists($file)) {
    // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) {
      ob_end_clean();
    }
    // заставляем браузер показать окно сохранения файла
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    // читаем файл и отправляем его пользователю
    readfile($file);
    exit;
  }
}
file_force_download($filename);
