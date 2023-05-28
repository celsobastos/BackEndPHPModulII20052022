<?php

namespace Impacta\Curso\Infra;

abstract class ConnectDb {
    abstract public function connect(): void;
}