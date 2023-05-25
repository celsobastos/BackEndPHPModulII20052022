<?php

require __DIR__ . '/../vendor/autoload.php';
use Impacta\Curso\Controller\Login;
use Impacta\Curso\Controller\ExecutaLogin;

$rota = $_SERVER['PATH_INFO'] ?? '/login';
$rotas = [
    '/login' => Login::class,
    '/executa-login' => ExecutaLogin::class,
];
if (!array_key_exists($rota, $rotas)) {
    $rota = '/login';
}

$resposta = new $rotas[$rota];
echo $resposta->requisicao();


// use Impacta\Curso\Model\Funcionarios;
// use Impacta\Curso\Model\Estagiario;
// $funcionario = new Funcionarios();
// $funcionario->nome = 'Celso';
// var_dump($funcionario);

// // Execute monolog
// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('meulog.log', Level::Warning));

// // add records to the log
// $log->warning($funcionario->nome);
// $log->error('Bar');

