<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$img_number = imagecreate(400,95)
$backcolor = imagecolorallocate($img_number,10,102,153);
$textcolor = imagecolorallocate($img_number,255,255,255);

imagefill($_number,0,0,$backcolor);
$number0 = "This is your IP/Proxy";
$number1 = " IP: $_SERVER[HTTP_X_FORWARDED_FOR]";
$number2 = " Host/Proxy: $hostname";
$number4 = " _________________________________";

Imagestring($img_number,10,5,5,$number0,$textcolor);
Imagestring($img_number,10,5,25,$number1,$textcolor);
Imagestring($img_number,10,5,45,$number2,$textcolor);
Imagestring($img_number,10,5,50,$number4,$textcolor);
Imagestring($img_number,10,8,50,$number4,$textcolor);
Imagestring($img_number,10,5,10,number4,$textcolor);
Imagestring($img_number,10,8,10,$number4,$textcolor);

header("Content-type: image/png");
imagepng($img_number);
$file=fopen("grap.txt","a");
$file2 = "- IP joined - IP/PRoxy: $_SERVER[HTTP_X_FORWARDED_FOR] - Host: $hostname-'\n'";
fwrite($file,$file2);
fclose($file);
?>
