<?php

class DotDirectoryFilter extends FilterIterator{
  
  public function accept()
  {
    return !$this->getInnerIterator()->isDot();
  }
}

$directory = './fixtures/Libro';
$iterator = new DotDirectoryFilter(new DirectoryIterator($directory));

foreach($iterator as $index => $value)
{
  echo get_class($value), PHP_EOL;  
  echo $iterator->getType(), ' ', $iterator->getPath(), ' ', $iterator->getPerms(), ' ', $value, PHP_EOL;
}

?>

