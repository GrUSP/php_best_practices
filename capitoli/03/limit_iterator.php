<?php

$data = array('Mela', 'Pera', 'Kiwi', 'Banana', 'Pompelmo');

$iterator = new LimitIterator(new ArrayIterator($data), 0, 2);

foreach($iterator as $value)
{
  echo $value, PHP_EOL;
}