<?php

$data = array('banana', 'mela', 'pera');
$iterator = new ArrayIterator($data);

function upper(Iterator $iterator){
  echo strtoupper($iterator->current()), PHP_EOL;
  return true;
}

iterator_apply($iterator, 'upper', array($iterator));
