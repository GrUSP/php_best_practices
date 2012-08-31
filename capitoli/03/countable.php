<?php

Class Person implements Countable
{
  private $age = 32;
  
  public function count()
  {
    return $this->age;
  }
}

$person = new Person();
echo count($person);

?>