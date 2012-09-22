<?php
$dateTimeZoneRome = new DateTimeZone("Europe/Rome");
$dateTimeRome = new DateTime("now", $dateTimeZoneRome);
$timeOffset = $dateTimeZoneRome->getOffset($dateTimeRome);
var_dump($timeOffset);
?>
