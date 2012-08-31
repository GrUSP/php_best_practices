<?php

$data = array('banana', 'mela', 'pera');
$iterator = new ArrayIterator($data);

echo iterator_count($iterator);
