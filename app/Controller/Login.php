<?php

namespace Impacta\Curso\Controller;

class Login extends RenderHTML {
    public function requisicao() {
        $titulo = 'Pagina de Login';
        $file = 'login-user';
        $this->render($file, ['erro' => ''], $titulo);
    }
}