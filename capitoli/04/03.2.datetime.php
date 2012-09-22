<?php 
//estendere l'informazione con la timezone relativa in modo implicito o esplicito
$time_implicit = new DateTime('1977-04-02 10:30:21 GMT+1' );
$time_explicit = new DateTime('1977-04-02 10:30:21', new DateTimeZone('Europe/Rome'));

print_r($time_implicit);
print_r($time_explicit);
?>

