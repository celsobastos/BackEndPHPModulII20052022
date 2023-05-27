<?php

require 'vendor/autoload.php';

use Impacta\Curso\Model\Colaboradores\Cpf;
use Impacta\Curso\Model\Colaboradores\Endereco;
use Impacta\Curso\Model\Colaboradores\Funcionarios;
use Impacta\Curso\Model\Colaboradores\Telefone;

$funcionario = new Funcionarios(
    nome: 'Celso',
    endereco: new Endereco('12345-78', 'Rua nanana', '1234'),
    cpf: new Cpf('123.456.789-6'),
    salario: 1500,
);
$funcionario->adicionarTelefone(new Telefone('11', '95841-2121'));
// $funcionario->adicionarTelefone(new Telefone('11', '95842-1277'));
// $funcionario->adicionarTelefone(new Telefone('11', '95843-7788'));
// $funcionario->adicionarTelefone(new Telefone('11', '95844-1447'));

var_dump($funcionario);
