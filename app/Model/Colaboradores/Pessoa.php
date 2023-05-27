<?php

namespace Impacta\Curso\Model\Colaboradores;

abstract class Pessoa {

    /** @var Telefone[] $telefone */
    protected array $telefone = [];

    public function __construct(
        protected string $nome,
        protected Endereco $endereco,
        protected Cpf $cpf,
    ) {}

    public function adicionarTelefone(Telefone $telefone) : void {
        $this->telefone[] = $telefone;
    }
}

