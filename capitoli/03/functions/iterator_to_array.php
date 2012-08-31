<?php

$data = array('banana', 'mela', 'pera');
$iterator = new ArrayIterator($data);

var_dump(iterator_to_array($iterator));