<?php

require 'vendor/autoload.php';

use Impacta\Curso\Model\Colaboradores\Cpf;
use Impacta\Curso\Model\Colaboradores\Diretor;
use Impacta\Curso\Model\Colaboradores\Endereco;
use Impacta\Curso\Model\Colaboradores\Estagiario;
use Impacta\Curso\Model\Colaboradores\Funcionarios;
use Impacta\Curso\Model\Colaboradores\Gerente;
use Impacta\Curso\Model\Colaboradores\Telefone;

$funcionario = new Estagiario(
    nome: 'Paulo de Oliveira',
    endereco: new Endereco('12345-78', 'Rua nanana', '1234'),
    cpf: new Cpf('123.456.789-6'),
    salario: 2000,
);
$funcionario->adicionarTelefone(new Telefone('11', '95841-2121'));
// $funcionario->adicionarTelefone(new Telefone('11', '95842-1277'));
// $funcionario->adicionarTelefone(new Telefone('11', '95843-7788'));
// $funcionario->adicionarTelefone(new Telefone('11', '95844-1447'));

// $funcionario->bonificacao();
// $funcionario->setNome('Carlos Algusto');

$funcionario->nome = 'Pedro Octavio da Silva';

// var_dump($funcionario->getNome());

echo $funcionario->nome;

die;

class ProcessaBonificacao {
    public function calcularBonificacao(Funcionarios $funcionario) {
        $funcionario->bonificacao();
    }
}

$func = new ProcessaBonificacao();
$func->calcularBonificacao($funcionario);

var_dump($funcionario);
