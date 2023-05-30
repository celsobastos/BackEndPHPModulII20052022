<?php

namespace Impacta\Curso\Model\Colaboradores;

abstract class Pessoa {

    // Trait
    use \Impacta\Curso\Helper\getTrait;

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

    private function getNome(): string {
        return $this->nome;
    }

    private function getEndereco(): Endereco {
        return $this->endereco;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

}

