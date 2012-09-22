<?php
$timeZoneTokyo = new DateTimeZone("Asia/Tokyo");
$timeRome = new DateTime("now", new DateTimeZone('Europe/Rome'));
echo $timeRome->format('c'); 
$timeRome->setTimezone($timeZoneTokyo);
echo $timeRome->format('c');
?> 

