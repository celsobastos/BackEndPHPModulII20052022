<?php

namespace Impacta\Curso\Model\Colaboradores;

use Impacta\Curso\Model\Logar;

class Diretor extends Funcionarios implements Logar {
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