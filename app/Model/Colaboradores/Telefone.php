<?php

namespace Impacta\Curso\Model\Colaboradores;

class Telefone {
    public function __construct(
        private string $codigo,
        private string $numero,
    ){}
}