<?php

namespace Impacta\Curso\Model;

class Login {

    public function __construct(
        private int $id,
        private string $login,
        private string $senha,
    ) {}

    public function getId(): int {
        return $this->id;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function getSenha(): string {
        return $this->senha;
    }
}