<?php

namespace Impacta\Curso\Infra;

class RepositorioCliente {

    private ConnectDb $conexao;

    public function __construct(ConnectDb $conexao){
        $this->conexao = $conexao;
    }

    public function salvar(array $post) {
        $this->conexao->connect();

        echo '<pre>';
        print_r($post);
    }
}