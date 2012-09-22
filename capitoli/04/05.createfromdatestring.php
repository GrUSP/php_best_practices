<?php
$date = new DateTime('2011-10-09 13:20'); 
$date->add(DateInterval::createFromDateString('+2 days +2 hours'));
$date->sub(DateInterval::createFromDateString('200 seconds'));
echo $date->format('c')."\n";
?>
