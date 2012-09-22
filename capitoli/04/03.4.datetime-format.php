<?php
$date = new DateTime('last day of october'); 
echo $date->format('Y-m-d')."\n";

// lo script è stato eseguito in data 2011-10-09
$date = new DateTime('last day of october'); 
echo $date->format('Y-m-d')."\n";
$date->modify('october last day');
echo $date->format('Y-m-d')."\n";


?>
