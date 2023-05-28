<?php

namespace Impacta\Curso\Infra;

class Mysql extends ConnectDb {
    public function connect() : void {
        echo ('connectado ao Mysql');
    }
}