<?php

class DotDirectoryFilter extends FilterIterator{
  
  public function accept()
  {
    return !$this->getInnerIterator()->isDot();
  }
}

$directory = './fixtures/Libro';
$iterator = new DotDirectoryFilter(new RecursiveDirectoryIterator($directory));

function scan($iterator, $level = '')
{
  foreach($iterator as $index => $value)
  {
    echo $level, $value, PHP_EOL;

    if($iterator->hasChildren())
    {
      scan($iterator->getChildren(), $level."\t");
    }
  }
}

scan($iterator);

?>