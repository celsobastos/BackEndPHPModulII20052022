<?php

use Impacta\Curso\Controller\Api\ApiRest;
use Impacta\Curso\Controller\CadastrarCliente;
use Impacta\Curso\Controller\Login;
use Impacta\Curso\Controller\ExecutaLogin;
use Impacta\Curso\Controller\Cadastro;
use Impacta\Curso\Controller\ListarLogin;

return [
    '/login' => Login::class,
    '/executa-login' => ExecutaLogin::class,
    '/cadastro' => Cadastro::class,
    '/cadastrar-cliente' => CadastrarCliente::class,
    '/listar-login' => ListarLogin::class,
    '/livros' => ApiRest::class,
];