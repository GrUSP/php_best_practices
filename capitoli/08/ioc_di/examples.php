<?php

/* Inversion of control */
$input = fopen('php://stdin', 'r');

echo "\nDigita il tuo nome: ";
$nome = fread($input, 200);
registra_nome($nome);

echo "\nDigita il tuo cognome: ";
$cognome = fread($input, 200);
registra_cognome($cognome);

echo "\nDigita il tuo indirizzo: ";
$indirizzo = fread($input, 200);
registra_indirizzo($indirizzo);

require 'shell.php';

$shell = new Shell();
$shell.question("Digita il tuo nome: ", 'registra_nome');
$shell.question("Digita il tuo cognome: ", 'registra_conome');
$shell.question("Digita il tuo indirizzo: ", 'registra_indirizzo');

$shell.execute();

/* Dependency Injection container */

$flickr_api = $container->get('flickr_api');
//...
$photo_sets = $flickr_api->getPhotoSets();
//...
$recent_photos = $flickr_api->getRecentPhotos(12);
//...

/* Uso del DIC */

$container = new DIC();

$response = $container->get('http_kernel')->handle(Request::createFromGlobals());
$response->sendHeaders();
$response->sendContent();

