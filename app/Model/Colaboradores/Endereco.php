<?php

namespace Impacta\Curso\Model\Colaboradores;

class Endereco {
    public function __construct(
        private string $cep,
        private string $logradouro,
        private int $numero,
    ) {}
}
