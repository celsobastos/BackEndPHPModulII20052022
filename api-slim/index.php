<?php
require __DIR__ . '/../vendor/autoload.php';

use Impacta\Curso\Infra\MySql;
use Impacta\Curso\Infra\RopositorioLogin;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->get('/login/{id}', function (Request $request, Response $response, $args){
    $id = $args['id'];

    $repositorio = new RopositorioLogin(new MySql);
    $data = $repositorio->search($id);
    $response->getBody()->write(json_encode($data, JSON_FORCE_OBJECT));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(empty($data) ? 204 : 200);
});

$app->get('/login', function (Request $request, Response $response, $args){
    $repositorio = new RopositorioLogin(new MySql);
    $data = $repositorio->all();
    $response->getBody()->write(json_encode($data, JSON_FORCE_OBJECT));
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(empty($data) ? 204 : 200);
});

$app->post('/login', function (Request $request, Response $response, $args){
    $post = json_decode($request->getBody(), JSON_OBJECT_AS_ARRAY);
    $response->getBody()->write(json_encode(['message' => 'Salvo com sucesso']));
    $repositorio = new RopositorioLogin(new MySql);
    $data = $repositorio->salvar($post);
    return $response
        ->withHeader('Content-Type', 'application/json')
        ->withStatus(!$data ? 204 : 200);
});

$app->run();