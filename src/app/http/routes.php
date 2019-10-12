<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

//add routes
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    
    $name = $args['name'];
    
    $response->getBody()->write("Hello, $name");
    
    return $response;
});