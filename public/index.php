<?php

require __DIR__ . '/../vendor/autoload.php';

$rotas = require __DIR__ . '/../Routes/routes.php';
$rota = $_SERVER['PATH_INFO'] ?? '/login';

if (!array_key_exists($rota, $rotas)) {
    $rota = '/login';
}

$resposta = new $rotas[$rota];
echo $resposta->requisicao();
