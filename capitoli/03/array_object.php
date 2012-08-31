<?php

$data = array('mela', 'pera', 'bananaa', 'arancia');

$object = new ArrayObject($data);
echo sprintf('L\'array contiene %d elementi', $object->count()), PHP_EOL;

$object->natsort();

echo 'Elemento con indice 0: ', $object[0], PHP_EOL;

foreach($object as $value)
{
  echo $value, PHP_EOL;
}


class Persona{
  public $nome;
  public $cognome;
  public $telefono;
}

$persona = new Persona();
$persona->cognome = 'Rossi';
$persona->nome = 'Mario';
$persona->telefono = '223344';

$obj_array = new ArrayObject($persona);
echo sprintf('L\'oggetto persona contiene %d elementi', $obj_array->count()), PHP_EOL;

$obj_array->natsort();

foreach($obj_array->getIterator() as $name => $value)
{
  echo $name.': '.$value, PHP_EOL;
}

?>