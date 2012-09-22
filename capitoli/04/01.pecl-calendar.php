<?php

$today_in_julian_day = gregoriantojd(8, 16, 2011); // $mese, $giorno, $anno
$today_in_jewish_cal = jdtojewish($today_in_julian_day); // restituisce una stringa del formato 'mese/giorno/anno'

echo jdmonthname($today_in_julian_day, 4)."\n";

$today_in_french_cal = JDToFrench($today_in_julian_day); 
$month_in_french_cal = jdmonthname($today_in_julian_day, CAL_FRENCH); 

var_dump($today_in_french_cal);
var_dump($month_in_french_cal);

$today_in_julian_day = cal_to_jd( CAL_GREGORIAN, 08, 16, 2011); // con CAL_GREGORIAN costante statica e gli altri parametri corrispondenti alla sintassi di data all'americana con, in ordine, $mese, $giorno, $anno.

var_dump($today_in_julian_day);

?>
