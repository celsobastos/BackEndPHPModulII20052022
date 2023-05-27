<?php

namespace Impacta\Curso\Model\Colaboradores;

class Cpf {

    public function __construct(private string $cpf) {}

    public function verificaCpf() : bool {
        if (empty($this->cpf)) {
            throw new \Exception('Erro: CPF invalido');
        }
        return true;
    }

}
