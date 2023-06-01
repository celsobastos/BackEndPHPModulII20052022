<?php

namespace Impacta\Curso\Controller;

use Impacta\Curso\Infra\MySql;
use Impacta\Curso\Infra\RopositorioLogin;

class ListarLogin extends RenderHTML {
    public function requisicao() {
        $titulo = 'Lista de Login';
        $file = 'listar-login';

        $repositorio = new RopositorioLogin(new MySql);
        $data = $repositorio->all();
        $this->render($file, ['data' => $data], $titulo);
    }
}