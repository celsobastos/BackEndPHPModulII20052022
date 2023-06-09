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
        try {
            $sql = "SELECT * FROM login;";
            $stmt = $this->conexao->connect()->query($sql);
            $listaLogin = $stmt->fetchAll();

            $lista = [];
            foreach ($listaLogin as $value) {
                $lista[] = new Login (
                    $value['id'],
                    $value['login'],
                    $value['senha']
                );
            }
            $this->conexao->close();
            return $lista;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function search(int $id) : array {
        $sql = "SELECT * FROM login WHERE id = :id";
        $stmt = $this->conexao->connect()->prepare($sql);
        $stmt->execute([
            ':id' => $id,
        ]);

        return $stmt->fetchAll();
    }

    public function saveAll() {
        $conexao = $this->conexao->connect();
        $conexao->beginTransaction();

        try {
            // Endereço
            $sql = "INSERT INTO login (login, senha) VALUES (?,?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, 'celso');
            $stmt->bindValue(2, '123');
            $stmt->execute();

            // Telefone
            $sql = "INSERT INTO login (login, senha) VALUES (?,?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, 'Paulo');
            $stmt->bindValue(2, '654654');
            $stmt->execute();

            // Gerente
            $sql = "INSERT INTO login (login, senha) VALUES (?,?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, 'Jonas');
            $stmt->bindValue(2, '78855');
            $stmt->execute();
        }
        catch (PDOException $e) {
            $e->getMessage();
            $conexao->rollBack();
        }
    }

}