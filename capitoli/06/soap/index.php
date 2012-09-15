<?php 

//use_soap_error_handler(true);

require __DIR__.'/Library.php';

$options = array('uri' => 'http://api.local/ws');

$server = new SoapServer(null, $options);
$server->setClass('Library');

$server->handle();