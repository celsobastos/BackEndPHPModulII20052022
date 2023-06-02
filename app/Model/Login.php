<?php

namespace Impacta\Curso\Model;

use ArrayIterator;
use IteratorAggregate;
use JsonSerializable;
use Traversable;

class Login  implements IteratorAggregate, JsonSerializable  {
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

    public function getIterator(): Traversable {
        return new ArrayIterator([$this->id, $this->login, $this->senha]);
    }

    public function jsonSerialize() : mixed {
        return [
            $this->id,
            $this->login,
            $this->senha,
        ];
    }

}
