<?php

require_once("GoGridClient.php");
// Inizializzazione della libreria
$client = new GoGridClient();
// esecuzione della richiesta HTTP
$request = $client->getRequestURL("grid/server/list",array("format" => "xml"));
print("Richiesta :$request\n");  
// lettura della risposta
$response = $client->sendAPIRequest($request);
print("Risposta :$response\n");
