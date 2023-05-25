<?php

namespace Impacta\Curso\Controller;

use Respect\Validation\Validator;

class ExecutaLogin extends RenderHTML {
    public function requisicao() {
        $titulo = 'Pagina executa login 123';
        $file = 'login-user';

        $test = Validator::email()->validate($_POST['email']);

        $mensagem = '';
        if (!$test) {
            $mensagem = 'Error: Email invalido';
        }

        $this->render($file, ['erro' => $mensagem], $titulo);
        // header('Location: /login?erro=123');
    }
}