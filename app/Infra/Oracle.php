<?php

namespace Impacta\Curso\Infra;

class Oracle implements ConnectInterface {
    public function connect(): PDO {
        echo ('connectado ao Oracle');
    }
}