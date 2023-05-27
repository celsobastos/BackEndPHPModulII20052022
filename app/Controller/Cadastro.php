<?php

namespace Impacta\Curso\Controller;

class Cadastro extends RenderHTML {
    public function requisicao() {
        $titulo = 'Cadastro de Clientes';
        $file = 'cadastro-cliente';
        $this->render($file, ['data' => ''], $titulo);
    }
}