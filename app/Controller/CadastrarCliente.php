<?php

namespace Impacta\Curso\Controller;

use Impacta\Curso\Infra\RepositorioCliente;
use Impacta\Curso\Infra\MySql;
use Impacta\Curso\Infra\Oracle;
use Impacta\Curso\Infra\RopositorioLogin;

class CadastrarCliente extends RenderHTML {
    public function requisicao() {
        $repositorio = new RopositorioLogin(new MySql());
        $result = $repositorio->salvar($_POST);

        if($result) {
            header('Location: /listar-login');
            die;
        }
    }
}