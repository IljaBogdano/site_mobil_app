<?php
//Print_r($_POST);
$email=$_POST['email'];
$message=$_POST['message'];

$err = '';
if(trim($email)=='')
$err = 'not email';

else if(trim($message)=='')
$err = 'Not message';

else if (strlen($message)<10)
$err = 'message very small';

if($err!='')
{
echo $err;
exit;
}

$subject = "=?utf-8?B?".base64_encode("my message")."?=";
$headers = "From: $email\r\nReaply-to: $email\n\rContent-type: text/html;charset=utf-8\r\n";
mail('ilja.bogdano@mail.ru', $subject, $message, $headers);

header("location: faqs.php")
?>
