<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to ="cssaman19@gmail.com";
$subject ="mail from website";

$headers ="Form: ".$name.  "\r\n".
"CC:cssaman19@gmail.com";
$txt = "You have Recive an e-mail form" .$name."\r\nEmail:" .$email ."\r\n"
Message:".$message";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header('Location:thankyou.html');

<>