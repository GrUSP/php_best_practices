<?php

$data = array('Mela', 'Pera', 'Kiwi');

$iterator = new NoRewindIterator(new ArrayIterator($data));

echo $iterator->current(), PHP_EOL;

$iterator->next();

echo $iterator->current(), PHP_EOL;

$iterator->next();

echo $iterator->current(), PHP_EOL;

$iterator->rewind();

echo $iterator->current(), PHP_EOL;

?>