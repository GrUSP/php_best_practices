<?php

class MyClass {

  function __construct() {
    echo __METHOD__, "\n";
  }

}

function my_function() {
  echo __FUNCTION__, "\n";
}

const COSTANTE = "global";
