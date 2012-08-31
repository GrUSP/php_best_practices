<?php

class CategoryFilter extends FilterIterator 
{
    private $filter;
    
    public function __construct(Iterator $iterator , $filter)
    {
        parent::__construct($iterator);
        $this->filter = $filter;
    }
    
    public function accept()
    {
        $item = $this->getInnerIterator()->current();
        return ($item['category'] == $this->filter);
    }
}

$data = array(
  array('name' => 'insalata', 'category' => 'verdura'),  
  array('name' => 'spinaci', 'category' => 'verdura'),
  array('name' => 'mela', 'category' => 'frutta'),
  array('name' => 'arancia', 'category' => 'frutta'),
);


$iterator = new CategoryFilter(new ArrayIterator($data), 'frutta');

foreach($iterator as $result)
{
  echo $result['name'], PHP_EOL;
}