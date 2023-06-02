<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$cursos = new stdClass();
$cursos->cursos = [
    ['Alemao' => '2525.22'],
    ['Ingles' => '7125.22'],
    ['Frances' => '1022.44'],
];

$app->get('/cursos', function (Request $request, Response $response, $args) use ($cursos) {
    $cursos = json_encode($cursos);
    $response->getBody()->write($cursos);
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(200);
});

$app->get('/cursos/{id}', function (Request $request, Response $response, $args) use ($cursos) {
    $id = $args['id'];
    // $cursos = json_encode($cursos);
    $response->getBody()->write($id);
    return $response
        ->withHeader('Content-Type', 'application/text')
        ->withStatus(200);
});

$app->post('/cursos', function (Request $request, Response $response, $args) use ($cursos) {
    $data = file_get_contents("php://input");
    $response->getBody()->write('Post');
    return $response
        ->withHeader('Content-Type', 'application/text')
        ->withStatus(200);
});

$app->delete('/cursos/{id}', function (Request $request, Response $response, $args) use ($cursos) {

    $response->getBody()->write('DELETE');
    return $response
        ->withHeader('Content-Type', 'application/text')
        ->withStatus(200);
});




$app->run();