<?php

$data = array('Frutto: Mela', 'Frutto: Pera', 'Frutto: Banana', 'Verdura: Insalata');

$iterator = new RegexIterator(new ArrayIterator($data), '/^Frutto: /');

print_r(iterator_to_array($iterator));

$iterator->setMode(RegexIterator::REPLACE);


print_r(iterator_to_array($iterator));

$iterator = new RegexIterator(new ArrayIterator($data), '/(^Frutto): (.*)/');
$iterator->setMode(RegexIterator::REPLACE);
$iterator->replacement = '$2: $1';

print_r(iterator_to_array($iterator));

?>