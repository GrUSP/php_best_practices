<?php
$timezone = new DateTimeZone("Europe/London");
$time_from = strtotime('1915-01-01 UTC');
$time_to = strtotime('1916-10-30 UTC');
$transitions = $timezone->getTransitions($time_from, $time_to);
print_r(array_slice($transitions, 0, 3)); // ci limitiamo alle prime tre
?> 

