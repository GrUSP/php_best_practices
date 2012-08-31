<?php

$data = array('Pera', 'Mela', 'Arancia', 'Kiwi');

$iterator = new ArrayIterator($data);
$iterator->natsort();

foreach($iterator as $value)
{
  echo $value, PHP_EOL;
}

echo PHP_EOL;

class Person
{
  public $cognome = 'Rossi';
  public $nome = 'Mario';
}

$iterator = new ArrayIterator(new Person);
$iterator->natsort();

foreach($iterator as $index => $value)
{
  echo $index.': '.$value, PHP_EOL;
}

?>