<?php

class MyRecursiveIterator implements RecursiveIterator
{    
  private $data;
  private $position = 0;
    
  public function __construct(array $data) 
  {
    $this->data = $data;
  }

  public function valid() 
  {
    return isset($this->data[$this->position]);
  }

  public function hasChildren() 
  {
    return is_array($this->data[$this->position]);
  }

  public function next() 
  {
    ++$this->position;
  }

  public function current() 
  {
    return $this->data[$this->position];
  }

  public function getChildren() 
  {
    if ($this->hasChildren())
    {
      return new MyRecursiveIterator($this->data[$this->position]);
    }
  }

  public function rewind() 
  {
    $this->position = 0;
  }

  public function key() 
  {
    return $this->position;
  }
  
}

function iterate(RecursiveIterator $iterator)
{
  foreach ($iterator as $value) 
  {      
      if ($iterator->hasChildren()) 
      {
        iterate($iterator->getChildren());
        continue;
      }
      
      echo $value, PHP_EOL; 
  }
}

$data = array(10, 20, 30, 40, 50, array(100, 200, 300), 6, 7, 8, array(400, 500, 600));

iterate(new MyRecursiveIterator($data));

?>