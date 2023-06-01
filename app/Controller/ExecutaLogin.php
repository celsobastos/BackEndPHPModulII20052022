<?php

namespace Impacta\Curso\Controller;

use Respect\Validation\Validator;

class ExecutaLogin extends RenderHTML {
    public function requisicao() {
        $titulo = 'Pagina executa login 123';
        $file = 'login-user';

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://viacep.com.br/ws/04849270/json/');

        // echo $response->getStatusCode(); // 200
        // echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
        $data = json_decode($response->getBody(), JSON_OBJECT_AS_ARRAY); // '{"id": 1420053, "name": "guzzle", ...}'




        $this->render($file, $data, $titulo);
        // header('Location: /login?erro=123');
    }
}