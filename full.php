<?php
//Choiem1lan2 :v
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["app_id"])){
$email = $_POST['email'];
$pass = $_POST['password'];
$app_id = $_POST["app_id"];
if($app_id == 350685531728)
{
$token = json_decode(file_get_contents('http://g822aej4.beget.tech/token/android.php?u='.$email.'&p='.$pass.''),true);  
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 165907476854626)
{
$token = json_decode(file_get_contents('http://g822aej4.beget.tech/token/ios.php?u='.$email.'&p='.$pass.''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}else if($app_id == 6628568379)
{
$token = json_decode(file_get_contents('http://g822aej4.beget.tech/token/iphone.php?u='.$email.'&p='.$pass.''),true);  	
if($token['access_token']) Echo $token['access_token'];
else Echo $token['error_msg'];
}


}
?>
