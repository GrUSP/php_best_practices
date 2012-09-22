<?php
$date = new DateTime('2011-10-09 13:20'); 
$date->add(new DateInterval('P2DT2H'));
$date->sub(new DateInterval('PT200S'));
echo $date->format('c')."\n";
?>

