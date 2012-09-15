<?php

require_once __DIR__.'/silex.phar';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\HttpKernel\Exception\HttpException;

$app = new Silex\Application();
$app['debug'] = true;

$app->get('/books', function () use ($app) {
    
    //recupera la lista dei libri
    // la converte in un formato: html, xml json

    return new Response();
});

$app->post('/books', function (Request $request) use ($app) {
    
    //crea un nuovo libro

    return new Response();
});

$app->match('/books/{id}.{format}', function ($id, $format) use ($app) {
	
	return new Response();
})
->assert('format', 'xml|json')
->value('format', 'json');

$app->run();