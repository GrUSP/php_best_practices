<?php

Class MyIteratorFactory{
  
  public function build($data)
  {
    if (is_null($data))
    {
      return new EmptyIterator();
    }
    
    if(is_array($data))
    {
      return new ArrayIterator($data);
    }
  }
  
}


$factory = new MyIteratorFactory();
$iterator = $factory->build(array('Mela', 'Pera', 'Arancia'));

foreach($iterator as $value)
{
  echo $iterator->current(), PHP_EOL;
}

$factory = new MyIteratorFactory();
$iterator = $factory->build(null);

foreach($iterator as $value)
{
  echo $iterator->current(), PHP_EOL;
}

?>