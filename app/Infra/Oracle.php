<?php

namespace Impacta\Curso\Infra;

class Oracle extends ConnectDb {
    public function connect(): void {
        echo ('connectado ao Oracle');
    }
}