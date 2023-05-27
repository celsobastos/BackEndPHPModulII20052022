<?php

namespace Impacta\Curso\Model\Colaboradores;

class Funcionarios extends Pessoa {
    private float $salario;

    public function __construct(
        string $nome,
        Endereco $endereco,
        Cpf $cpf,
        float $salario,
    ) {
        $this->setSalario($salario);
        parent::__construct($nome, $endereco, $cpf);
    }

    private function setSalario(float $salario) : void {
        if ($salario < 1350) {
            throw new \Exception('salario deve ser maior que o minimo.');
        }
        $this->salario = $salario;
    }
}
