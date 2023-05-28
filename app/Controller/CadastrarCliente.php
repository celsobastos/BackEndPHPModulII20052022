<?php

namespace Impacta\Curso\Controller;

use Impacta\Curso\Infra\RepositorioCliente;
use Impacta\Curso\Infra\MySql;
use Impacta\Curso\Infra\Oracle;

class CadastrarCliente extends RenderHTML {
    public function requisicao() {

        // $email = $_POST['email'];
        // $senha = $_POST['senha'];
        // echo $email . '  ' . $senha;

        $repositorio = new RepositorioCliente(new Oracle());
        $repositorio->salvar($_POST);

        die;

    }
}