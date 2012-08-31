<?php

$data = array(array('tet3', 'test4', 'test5'), array('tet2', 'test1'));
$iterator = new RecursiveRegexIterator(new RecursiveArrayIterator($data), '/^test/', RecursiveRegexIterator::ALL_MATCHES);

foreach ($iterator as $value) {
  foreach ($iterator->getChildren() as $value) {
    echo $value, PHP_EOL;
  }   
}

?>