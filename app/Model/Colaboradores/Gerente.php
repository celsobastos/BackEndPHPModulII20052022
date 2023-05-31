<?php

namespace Impacta\Curso\Model\Colaboradores;

use Impacta\Curso\Model\LogarInterface;

class Gerente extends Funcionarios implements LogarInterface {
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