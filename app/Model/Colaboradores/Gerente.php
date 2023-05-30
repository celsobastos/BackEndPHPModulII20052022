<?php

namespace Impacta\Curso\Model\Colaboradores;

use Impacta\Curso\Model\Logar;

class Gerente extends Funcionarios implements Logar {
    protected function addPorcentagem(): float {
        return 0.30;
    }

    public function logar($usuario, $senha): string {
        if ($senha == 'gerente') {
            return 'Logado';
        }
        return 'Não foi possivel Logar';
    }
}