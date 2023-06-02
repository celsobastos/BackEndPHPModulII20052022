<?php

namespace Impacta\Curso\Infra;

use PDO;
use PDOException;

class Mysql implements ConnectInterface {

    private PDO $conexao;

    public function __construct() {
        try {
            $host = '127.0.0.1';
            $port = '3306';
            $dbname = 'impactacurso';
            $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
            $this->conexao = new PDO(
                $dsn,
                'root',
                '123456789',
                [PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC],
            );

        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function connect() : PDO {
        return $this->conexao;
    }

    public function desconnect() : void {
        $this->conexao = null;
    }
}