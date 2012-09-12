<?php
namespace MyProject\MySubModule\MyAction;
class Exception extends \Exception {}

$a = new Exception('hi'); // $a è un oggetto di classe MyProject\MySubModule\MyAction\Exception
$b = new \Exception('hi'); // $b è un oggetto di classe Exception

$c = new ArrayObject; // proverà ad istanziare un oggetto di classe MyProject\MySubModule\MyAction\ArrayObject

function strlen($str) {
  echo 'log strlen: '.\strlen($str);
}

const E_ERROR = 1234;

strlen('ciao'); // stampa a video "log strlen: 4", viene invocata la funzione MyProject\MySubModule\MyAction\strlen()
var_dump(is_array('no')); // stampa a video "bool(false)", viene invocata la funzione \is_array()

echo E_ERROR, "\n"; // stampa a video "1234", accede alla costante MyProject\MySubModule\MyAction\E_ERROR 
echo INI_ALL, "\n"; // stampa a video il valore della costante INI_ALL del namespace globale


