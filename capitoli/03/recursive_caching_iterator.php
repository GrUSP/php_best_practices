<?php

class Alimento
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }
  
  public function __toString()
  {
    return $this->name;
  }
}

$data = array(
  'Frutta' => array(new Alimento('Mela'), new Alimento('Pera'), new Alimento('Kiwi')),
  'Verdura' => array('Pomodori', 'Insalata', 'Spinaci')
);

$iterator = new RecursiveCachingIterator(new RecursiveArrayIterator($data));

for($iterator->rewind(); $iterator->valid(); $iterator->next())
{
  for($iterator->getChildren()->rewind(); $iterator->getChildren()->valid(); $iterator->getChildren()->next())
  {
    echo $iterator->getChildren(), PHP_EOL;
  }
}

?>