<?php
$date = new DateTime();
$date->setISODate(2008, 2); // restituisce il primo giorno della seconda settimana del 2008
echo $date->format('Y-m-d')."\n";

$date = new DateTime();
$date->setISODate(2008, 2, 7); // restituisce il 7o giorno della seconda settimana del 2008
echo $date->format('Y-m-d')."\n";

$date = new DateTime();
$date->setISODate(2008, 2, 8); 
echo $date->format('Y-m-d')."\n";
$date->setISODate(2008, 3); 
echo $date->format('Y-m-d');

?> 
