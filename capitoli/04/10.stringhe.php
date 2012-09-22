<?php

$date_of = new DateTime('last monday of october'); 
$date_not_of = new DateTime('last monday october'); 
echo $date_of->format("l c\n")."\n";
echo $date_not_of->format("l c\n")."\n";


?>
