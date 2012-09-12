<?php //namespace.php
namespace MyProject;

echo '"', __NAMESPACE__, '"'; // mostra "MyProject"
?>

<?php //globalnamespace.php

echo '"', __NAMESPACE__, '"'; // mostra una stringa vuota ""
?>

<?php //myproject.php
namespace MyProject;

class MyClass {
  public function __construct(){
    echo __METHOD__;
  }
}

function get($classname)
{
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a;
}

$a = \MyProject\get('MyClass'); // stampa "MyProject\MyClass";
?>

<?php //namepsace_keyword.php
namespace MyProject;

use YourProject\SubProject as mine; // Come importare i namespace è spiegato in seguito

SubProject\mine(); // chiama la funzione MyProject\SubProject\mine();
namespace\SubProject\mine(); // chiama la funzione MyProject\SubProject\mine();

namespace\func(); // chiama la funzione MyProject\func()
namespace\sub\func(); // chiama la funzione MyProject\sub\func()
namespace\MyClass::get('qualcosa'); // chiama il metodo statico "get" della classe MyProject\MyClass
$a = new namespace\sub\MyClass(); // istanzia un oggetto di classe MyProject\sub\MyClass
$b = namespace\CONSTANT; // assegna a $b il valore della costante MyProject\CONSTANT
?>


<?php //gloabal_namespace_keyword.php

namespace\func(); // chiama la funzione func() del namespace globale
namespace\MyProject\func(); // chiama la funzione func() nel namespace MyProject
namespace\MyClass::get('qualcosa'); // chiama il metodo statico "get" della classe MyClass del namespace globale
$a = new namespace\MyProject\MyClass(); // crea un'istanza della classe MyProject\MyClass
$b = namespace\CONSTANT; // assegna a $b il valore della costante CONSTANT del namespace globale
?>


/* uso pratico */


<?php //primo.php
namespace primo;

class Xyz {
}

function abc() {
}
?>

<?php //secondo.php
namespace secondo;

class Xyz {
}

function abc() {
}
?>

<?php //esempio.php
namespace secondo;

use primo\Xyz;
use primo\abc;

new Xyz(); // istanzia \primo\Xyz
new namespace\Xyz(); // istanzia \secondo\Xyz
?>
