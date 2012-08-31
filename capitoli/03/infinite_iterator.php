<?php

$data = array('Mela', 'Pera', 'Kiwi');

$iterator = new InfiniteIterator(new ArrayIterator($data));

foreach($iterator as $value)
{
  echo $iterator->current();
}

?>