<?php

// Inclusione della libreria php-cloudfiles
require('php-cloudfiles/cloudfiles.php');
// Rackspace key
$user = "nome utente"; 
$key  = "chiave segreta API"; 
// Autenticazione con il servizio API di Rackspace
$auth = new CF_Authentication($user, $key);
try {
    $auth->authenticate();
} catch (Exception $e) {
    die ('Errore: ' . $e->getMessage());
}
$conn = new CF_Connection($auth);
// Creazione di un container di prova
$container = $conn->create_container('test');
// Nome del file da memorizzare
$filename = 'picture.jpg';
// Invio del file a Rackspace
$object = $container->create_object($filename);
$object->load_from_filename($filename);
