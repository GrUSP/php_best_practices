<?php

use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // istazia un oggetto di classe My\Full\Classname
$a = 'Another';
$obj = new $a;      // istanzia un oggetto di classe Another

$obj = new Another; // istanzia un oggetto di classe My\Full\Classname
$obj = new \Another; // istanzia un oggetto di classe Another
$obj = new Another\thing; // istanzia un oggetto di classe My\Full\Classname\thing
$obj = new \Another\thing; // istanzia un oggetto di classe Another\thing
