<?php

namespace Impacta\Curso\Model;

interface Logar {
    public function logar(string $user, string $senha) : string;
}