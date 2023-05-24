<?php

require "./ProcessoNotas.php";

$aluno = new ProcessaNotas('Pedro');
$parametros = $argv;

if (!isset($parametros[1]) || !is_numeric($parametros[1])) {
    $os = php_uname();
    !strpos($os, 'Linux') ?
        system('clear') :
        system('cls');
    echo 'É obrigatório informar a quantidade de notas.' . PHP_EOL;
    die;
}

for ($i = 0 ; $i < $parametros[1] ; $i++) {
    echo 'Digite uma nota de 0 - 10:';
    $nota = fgets(STDIN);
    $aluno->addNotas($nota);
}

echo "Sua media é:" . $aluno->calculoMedia() . PHP_EOL;
