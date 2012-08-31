<?php

class Persona
{
  public $nome = 'Mario';
  public $cognome = 'Rossi';
  public $telefono = array('cellulare' => '114499', 'ufficio' => '224433');
  public $socials = array('twitter' => 'rossi', 'facebook' => 'http://www.facebook.com/rossi');
}

$iterator = new RecursiveArrayIterator(new Persona);

foreach($iterator as $index => $value)
{
  if ($iterator->hasChildren())
  {
    foreach($iterator->getChildren() as $key => $child)
    {
      echo $key.': '.$child, PHP_EOL;      
    }
  }
  else
  {
    echo $index.': '.$value, PHP_EOL;
  }
}

?>