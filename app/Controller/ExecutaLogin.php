<?php

namespace Impacta\Curso\Controller;

class ExecutaLogin extends RenderHTML {
    public function requisicao() {
        $titulo = 'Pagina executa login 123';
        $file = 'login-user';

        $_POST['email'];

        // $this->render($file, ['erro' => 'erroa ao enviar'], $titulo);
        header('Location: /login?erro=123');
    }
}