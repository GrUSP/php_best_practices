<?php

$data = array('Mela', 'Pera', 'Kiwi', 'Banana', 'Pompelmo');

$it = new ArrayIterator($data);
$iterator = new CachingIterator($it);

for($iterator->rewind(); $iterator->valid(); $iterator->next())
{
  echo $iterator, PHP_EOL;
}