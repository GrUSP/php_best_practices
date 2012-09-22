<?php 
$eu = DateTimeZone::listIdentifiers(DateTimeZone::EUROPE); 
$all_except_antartica = DateTimeZone::listIdentifiers(DateTimeZone::ALL & ~DateTimeZone::ANTARCTICA);
$us = DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, 'US');

var_dump($eu);
var_dump($all_except_antartica);
var_dump($us);

?>

