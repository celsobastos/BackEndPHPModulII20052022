<?php

namespace Impacta\Curso\Model\Colaboradores;

class Telefone {
    public function __construct(
        private string $codigo,
        private string $numero,
    ){}

    public function __toString() {
        return "({$this->codigo}) {$this->numero}" ;
    }
}