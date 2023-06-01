<?php

namespace Impacta\Curso\Infra;

use PDO;
use PDOException;
use Impacta\Curso\Model\Login;

class RopositorioLogin {

    private ConnectInterface $conexao;

    public function __construct(ConnectInterface $conexao){
        $this->conexao = $conexao;
    }

    public function salvar(array $post): bool {
        try {
            $conexao = $this->conexao->connect();
            $sql = "INSERT INTO login (login, senha) VALUES (?,?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $post['email']);
            $stmt->bindValue(2, $post['senha']);
            $result = $stmt->execute();
            if ($result) {
                return true;
            }
        } catch (PDOException $e) {
            // $e->getMessage();
            return false;
        }
    }

    public function all(): array {
        $sql = "SELECT * FROM login;";
        $stmt = $this->conexao->connect()->query($sql);

        // $this->conexao->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);

        $listaLogin = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $lista = [];
        foreach ($listaLogin as $value) {
            $lista[] = new Login (
                $value['id'],
                $value['login'],
                $value['senha']
            );
        }

        return $lista;
    }

}