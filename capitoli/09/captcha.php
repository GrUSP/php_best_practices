<?php

session_start();
$image = imagecreatefrompng("captcha.png");
if (empty($image)) {
    die("Il file captcha.png non è stato trovato");
} 
$captcha = substr(md5(uniqid()),-6,6);
$_SESSION['captcha'] = $captcha;
$color = imagecolorallocate($image, 100, 100, 100);
imagettftext($image, 25, 0, 15, 40, $color, 'FreeSans.ttf', $captcha);
header("Content-type: image/png");
imagepng($image);
