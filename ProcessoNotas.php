<?php

class ProcessaNotas {

    public string $nome;
    public array $notas;

    public function __construct(string $nome, array $notas = []) {
        $this->nome = $nome;
        $this->notas = $notas;
    }

    public function getNotas(): array {
        return $this->notas;
    }

    public function addNotas(float $nota) {
        $this->notas[] = $nota;
    }

    public function calculoMedia(){
        $soma = array_sum($this->notas);
        return $soma / count($this->notas);
    }
}


$notas1 = new ProcessaNotas('Celso');

$notas2 = new ProcessaNotas('Otavio');

$notas3 = $notas1;

$notas3->nome = 'Jonas da Silva';

var_dump($notas1);
var_dump($notas2);
var_dump($notas3);

