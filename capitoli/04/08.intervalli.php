<?php
// il prossimo lunedì
$date_start = new DateTime('2011-10-09'); 
$interval = DateInterval::createFromDateString( 'next monday' );
$occurrences = 2;
$period = new DatePeriod( $date_start, $interval, $occurrences );

foreach ( $period as $date )
{
	echo $date->format("l c\n");
}

// Se volessimo invece indicare una data di fine ripetizione dovremmo aggiungerla tra la prima e l'intervallo di ripetizione.
$interval = 'R2/2011-10-09T00:00:00Z/P1W';
$period = new DatePeriod( $interval);

foreach ( $period as $date )
{
	echo $date->format("l c\n");
}

$interval = 'R2/2011-10-09T00:00:00Z/2011-10-16T00:00:00Z/P1W';
$period = new DatePeriod( $interval);

foreach ( $period as $date )
{
	echo $date->format("l c\n");
}

// escludere la data di partenza
$date_start = new DateTime('2011-10-09'); 
$interval = DateInterval::createFromDateString( 'next monday' );
$date_end = new DateTime('2011-10-16'); 

$period = new DatePeriod( $date_start, $interval, $date_end, DatePeriod::EXCLUDE_START_DATE );

foreach ( $period as $date )
{
	echo $date->format("l c\n");
}

// secondo lunedì del mese
$date_start = new DateTime('2010-12-31'); 
$interval = DateInterval::createFromDateString( 'second monday of next month' );
$date_end = new DateTime('2011-12-31'); 

$period = new DatePeriod( $date_start, $interval, $date_end, DatePeriod::EXCLUDE_START_DATE );

foreach ( $period as $date )
{
echo $date->format("l c\n");
}
?>

