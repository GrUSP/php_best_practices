<?php

namespace MyNamespace;

class MyClass {

  function __construct() {
    echo __METHOD__, "\n";
  }

}

function my_function() {
  echo __FUNCTION__, "\n";
}

const COSTANTE = "namespaced";

include 'nonamespace.php';

$a = 'MyClass';
$obj = new $a;
$b = 'my_function';
$b();
echo constant('COSTANTE'), "\n";

/* Se si usano le doppie virgolette, il namespace deve esssere scritto come "\\MyNamespace\\MyClass" */
$a = '\MyNamespace\MyClass';
$obj = new $a; // prints namespacename\classname::__construct
$a = 'MyNamespace\MyClass';
$obj = new $a; // also prints namespacename\classname::__construct
$b = 'MyNamespace\my_function';
$b(); // prints namespacename\my_function
$b = '\MyNamespace\my_function';
$b(); // also prints namespacename\my_function
echo constant('\MyNamespace\COSTANTE'), "\n"; // prints namespaced
echo constant('MyNamespace\COSTANTE'), "\n"; // also prints namespaced



