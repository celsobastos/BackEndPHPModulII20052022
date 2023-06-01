<?php

namespace Impacta\Curso\Infra;

use PDO;

interface ConnectInterface {
    public function connect(): PDO;
}