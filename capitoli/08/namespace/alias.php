<?php
namespace MyProject;

use My\Full\Classname as Another;
use My\Full\NSname; // questo è ideantico a scrive My\Full\NSname as NSname
use ArrayObject; //Importiamo una classe dal namespace globale

$obj = new namespace\Another; // istanzia un oggetto di classe MyProject\Another
$obj = new Another; // istanzia un oggetto di classe My\Full\Classname
NSname\subns\func(); // chiama la funzione My\Full\NSname\subns\func
$a = new ArrayObject(array(1)); // istanzia un oggetto di classe ArrayObject


/* altro modo per utilizzare use */
use My\Full\Classname as Another, My\Full\NSname;

$obj = new Another; // istanzia un oggetto di classe My\Full\Classname
NSname\my_function(); // invoca la funzione My\Full\NSname\my_function()
