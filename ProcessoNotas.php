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
