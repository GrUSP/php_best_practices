<?php

Class Persona
{
  public $nome;
  public $cognome;
  public $data_compleanno;
  
  public function __toString()
  {
    return $this->nome.' '.$this->cognome;
  }
}

$file = new SplFileObject(__DIR__.'/fixtures/example.csv');
$file->setFlags(SplFileObject::READ_CSV);

$personas = array();

foreach($file as $line)
{
  $persona = new Persona;
  $persona->nome = $line[0];
  $persona->cognome = $line[1];
  $persona->data_compleanno = $line[2];
  
  $personas[] = $persona;
}

foreach($personas as $persona)
{
  echo $persona, PHP_EOL;
}

?>