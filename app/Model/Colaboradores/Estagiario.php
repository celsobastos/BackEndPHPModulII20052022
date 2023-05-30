<?php

namespace Impacta\Curso\Model\Colaboradores;

class Estagiario extends Funcionarios {
    protected function addPorcentagem(): float {
        return 0.15;
    }
}