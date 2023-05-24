<?php

require __DIR__ . '/../vendor/autoload.php';

use Impacta\Curso\Model\Funcionarios;
use Impacta\Curso\Model\Estagiario;
$funcionario = new Funcionarios();
$funcionario->nome = 'Celso';
var_dump($funcionario);

// Execute monolog
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('meulog.log', Level::Warning));

// add records to the log
$log->warning($funcionario->nome);
$log->error('Bar');


// ini_set('display_errors', 0);
// echo ini_get('display_errors') ? 'ON' : 'OFF';
// echo phpinfo();
// echo 'Hello world!';
// $arrar = new SplFixedArray(5);
// $arrar[20] = 'bom dia';
