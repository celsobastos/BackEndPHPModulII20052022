<?php

namespace Impacta\Curso\Model;

interface LogarInterface {
    public function logar(string $user, string $senha) : string;
}