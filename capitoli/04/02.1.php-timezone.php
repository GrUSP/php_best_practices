<?php
$timezone = new DateTimeZone('Europe/Rome');
echo $timezone->getName();
print_r($timezone->getLocation());
?>

