<?php

namespace Impacta\Curso\Controller;

class CadastrarCliente extends RenderHTML {
    public function requisicao() {

        // echo '<pre>';
        // print_r($_POST);
        // die;


        $email = $_POST['email'];
        $senha = $_POST['senha'];
        echo $email . '  ' . $senha;

        die('Você chegou até aqui');

    }
}