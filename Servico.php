<?php

require 'vendor/autoload.php';

use Impacta\Curso\Model\Colaboradores\Cpf;
use Impacta\Curso\Model\Colaboradores\Diretor;
use Impacta\Curso\Model\Colaboradores\Endereco;
use Impacta\Curso\Model\Colaboradores\Estagiario;
use Impacta\Curso\Model\Colaboradores\Funcionarios;
use Impacta\Curso\Model\Colaboradores\Gerente;
use Impacta\Curso\Model\Colaboradores\Telefone;
use Impacta\Curso\Model\Conta\Titular;

$conta = new Titular (
    'Paulo de Oliveira',
    new Endereco('12345-78', 'Rua nanana', '1234'),
    new Cpf('123.456.789-6'),
);

$conta->depositar(500);

var_dump($conta);
die;






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


interface TaxaInterface {
    public function calcuarTaxa() : array;
}
class Cliente implements TaxaInterface {

    public float $taxa = 0.15;
    public array $valor;

    public function __construct(array $valor) {
        $this->valor = $valor;
    }

    public function calcuarTaxa(): array {

        $total = [];
        foreach ($this->valor as $v) {
            $total[] = $v * $this->taxa;
        };

        return $total;
    }
}
class Funcionario implements TaxaInterface {
    public float $taxa = 0.10;

    public function calcuarTaxa():float {
        return $this->taxa;
    }
}
class CalculaTaxa {
    public function calcular(TaxaInterface $loja) {
        return $loja->calcuarTaxa();
    }
}


$executa = new CalculaTaxa();
$resultato = $executa->calcular(new Cliente([100, 500, 555]));

echo 'Total da Compra com desconto: ' . $resultato . PHP_EOL;


$test = "Celso Ricardo";

$newValue = explode(' ', $test);


[0 => 'a', 1 => 'b', 2 => 'c'];


$i = 1;
foreach ($this->valor as $v) {

    aqui;

    if ($i == 50) {
        // ZIP;

        $i = 1;
        continue;
    }

    $i++;

};