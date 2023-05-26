<?php

namespace Impacta\Curso\Model\Conta;

use Impacta\Curso\Model\Colaboradores\Pessoa;

class Titular extends Pessoa {
    private float $conta;

    /**
     * Soliciar Limite de cheque especial
     *
     * @param float $valor
     *   Valor solicitado para limite de credito
     * @param string $senha
     *   Senha de permissão de acesso.
     *
     *
     * @return void
     * @throws Exception
     */
    public function solicitarLimiteDeChequeEspecial(
        float $valor,
        string $senha,
    ): void {
        if ($senha !== '123') {
            throw new \Exception('Senha invalida');
        }
        $this->conta = $valor;
    }
}