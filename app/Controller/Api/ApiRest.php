<?php

namespace Impacta\Curso\Controller\Api;

use stdClass;

class ApiRest{
    public function requisicao() {

        $verbo = $_SERVER['REQUEST_METHOD'];
        $livros = new stdClass();
        $livros->livros = [
            ['autor', 'Marcos'],
            ['autor', 'Jonas'],
        ];

        if ($verbo === 'GET') {
            header("HTTP/1.1 200 OK");
            $listaLivros = json_encode($livros);
            echo $listaLivros;
        }
        elseif ($verbo === 'POST') {

            $data = file_get_contents("php://input");

            $encode  = (array) json_decode($data);
            $encode['Autor2'] = 'testando 12';

            header("HTTP/1.1 201 created");
            echo json_encode([
                'message' => 'Autor Salvo com sucesso.',
                'resposta' => true,
            ]);
        }
        else {
            echo 'não tem valores';
        }

    }
}