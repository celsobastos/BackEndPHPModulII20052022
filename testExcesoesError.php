<?php

function funcao1() {
    echo 'Iniciando função 1' . PHP_EOL;
    try {
        funcao2();
    }
    catch (Exception $e) {
        echo 'Linha do erro: ' .  $e->getLine() . PHP_EOL;
        echo 'Mensagem: ' .  $e->getMessage() . PHP_EOL;
        echo 'StackTrace: ' .  $e->getTraceAsString() . PHP_EOL;
    }


    echo 'Finalizando função 1' . PHP_EOL;
}

function funcao2() {
    echo 'Iniciando função 2' . PHP_EOL;
    echo 'Função 2' . PHP_EOL ;

    intdiv(5/0);

    $array = new SplFixedArray(5);
    $array[10] = 4;

    echo 'Finalizando função 2' . PHP_EOL;
}


function calcSalario ($salario) {
    if($salario == 0) {

    }
    $reajuste = $salario + $salario * 0.1;

}

echo 'Iniciando o MAN' . PHP_EOL;
funcao1();
echo 'Fim do MAN' . PHP_EOL;