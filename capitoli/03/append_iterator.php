<?php

$data = array('Mela', 'Pera', 'Arancia');

$iterator = new AppendIterator();
$iterator->append(new ArrayIterator($data));

$data = array('Banana', 'Kiwi', 'Mela');

$iterator->append(new ArrayIterator($data));

foreach($iterator as $value)
{
  echo $value, PHP_EOL;
}

?>