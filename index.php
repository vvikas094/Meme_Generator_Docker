<?php

$url= $_GET['url'];
$imagefiletype=strtolower(pathinfo($url,PATHINFO_EXTENSION));
$uppertext= (empty($_GET['uppertext'])) ? '': $_GET['uppertext'];
$lowertext= (empty($_GET['lowertext'])) ? '': $_GET['lowertext'];
 $im = imagecreatefromjpeg($url);
 $white = ImageColorAllocate($im, 255,255,255);
 $width = imagesx($im);
$height = imagesy($im);


ImageTTFText ($im, 30, 0, 50,40, $white, './Candy.ttf', $uppertext);
ImageTTFText ($im, 30, 0, 50,($height-40), $white, './Candy.ttf', $lowertext);
 header('Content-Type: image/'.$imagefiletype);
 imagejpeg($im);
 
?>


