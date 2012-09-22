<?php
$date = new DateTime('2011-10-09 13:20'); 
echo $date->format('c')."\n";
$date->modify('+2 days');
echo $date->format('c')."\n";
$date->modify('+2 hours');
echo $date->format('c')."\n";
$date->modify('-200 seconds');
echo $date->format('c')."\n";

$date = new DateTime('2011-10-09 13:20'); 
$date->modify('+2 days +2 hours -200 seconds');
echo $date->format('c')."\n";


?>

