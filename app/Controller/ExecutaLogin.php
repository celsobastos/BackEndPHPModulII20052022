<?php

namespace Impacta\Curso\Controller;

use Respect\Validation\Validator;

class ExecutaLogin extends RenderHTML {
    public function requisicao() {
        $titulo = 'Pagina executa login 123';
        $file = 'login-user';

        $test = Validator::email()->validate($_POST['email']);

        $mensagem = '';
        $valida = 'true';
        if (!$test) {
            $mensagem = 'Error: Email invalido';
            $valida = 'false';
        }
        else {
            $mensagem = 'Sucesso';
            $valida = 'true';
        }

        $this->render($file, ['mensagem' => $mensagem, 'valida' => $valida ], $titulo);
        // header('Location: /login?erro=123');
    }
}