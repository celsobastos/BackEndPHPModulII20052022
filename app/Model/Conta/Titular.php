<?php

namespace Impacta\Curso\Model\Conta;

use Impacta\Curso\Model\Colaboradores\Pessoa;
use Impacta\Curso\Helper\Validate;
use Impacta\Curso\Model\Colaboradores\Estagiario;
use Impacta\Curso\Model\LogarInterface;

class Titular extends Pessoa implements LogarInterface {
    private float $conta;
    private float $saldo;
    public Validate $valida;

    public function __construct() {
        $this->saldo = 0;
        $this->valida = new Validate();
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar(float $valorDeposito) {
        $valorDeposito = $this->valida->validar($valorDeposito);
        if (!$valorDeposito) {
            throw new \Exception('Saldo deve ser maior que zero.');
        }
        $this->saldo += $valorDeposito;
    }

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

    public function logar($usuario, $senha): string {
        if ($senha == 'titular') {
            return 'Logado';
        }
        return 'Não foi possivel Logar';
    }

    public function soma($v1, $v2) {
        return $v1 + $v2;
    }




}