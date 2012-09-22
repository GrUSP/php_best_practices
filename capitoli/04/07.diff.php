<?php

$date = new DateTime('2011-10-09 13:20'); 
$date_next = new DateTime('2011-10-19 13:30'); 
$interval = $date->diff($date_next);

print_r($interval); 

$date = new DateTime('2011-10-09 13:20'); 
$date_next = new DateTime('2011-10-19 13:30'); 
$interval = $date->diff($date_next);
$days = $interval->format('%d');

print_r($days); 

?>
