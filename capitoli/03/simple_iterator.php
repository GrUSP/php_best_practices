<?php

class Macedonia implements Iterator
{
    private $frutta = array('Mela', 'Pera', 'Arancia');

    public function current()
    {
        return current($this->frutta);
    }

    public function key()
    {
        return key($this->frutta);
    }

    public function next()
    {
        next($this->frutta);
    }

    public function rewind()
    {
        reset($this->frutta);
    }

    public function valid()
    {
        return (current($this->frutta) !== FALSE);
    }
}

$my_macedonia = new Macedonia();

foreach ($my_macedonia as $frutto) 
{
    echo $frutto.PHP_EOL;
}

?>