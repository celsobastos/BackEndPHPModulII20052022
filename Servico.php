<?php

require 'vendor/autoload.php';

use Impacta\Curso\Model\Colaboradores\Endereco;
use Impacta\Curso\Model\Colaboradores\Funcionarios;
use Impacta\Curso\Model\Colaboradores\Pessoa;


$funcionario = new Funcionarios(
    'Celso',
    new Endereco('12345-78', 'Rua nanana', '1234'),
    '123.123.123-5',
    1500
);
var_dump($funcionario);
