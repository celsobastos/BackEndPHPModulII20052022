<?php

namespace Impacta\Curso\Model\Colaboradores;

abstract class Pessoa {
    public function __construct(
        protected string $nome,
        protected Endereco $endereco,
        protected string $cpf,
    ) {}
}
