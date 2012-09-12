<?php

require_once __DIR__.'/Request.php';
require_once __DIR__.'/Routing.php';
require_once __DIR__.'/Response.php';
require_once __DIR__.'/FrontController.php';

$request = new Request();
$routing = new Routing();

$controller = new FrontController($routing);
$response = $controller->handle($request);

$response->render();
