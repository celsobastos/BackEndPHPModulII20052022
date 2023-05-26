<?php

namespace Impacta\Curso\Controller;

use Impacta\Curso\Model\Colaboradores\Funcionarios;

$funcionario = new Funcionarios();
$funcionario->setSalario(1500);

var_dump($funcionario);