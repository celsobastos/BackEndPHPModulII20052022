<?php

namespace Impacta\Curso\Model\Colaboradores;

use Impacta\Curso\Model\LogarInterface;

class Diretor extends Funcionarios implements LogarInterface {
    protected function addPorcentagem(): float {
        return 0.50;
    }

    public function logar($usuario, $senha): string {
        if ($senha == 'diretor') {
            return 'Logado';
        }
        return 'Não foi possivel Logar';
    }
}