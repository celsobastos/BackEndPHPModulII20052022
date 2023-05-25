<?php

function funcao1() {
    echo 'Iniciando função 1' . PHP_EOL;
    funcao2(20);
    // try {
    //     funcao2(100);
    // }
    // catch (Exception $e) {
    //     echo 'Linha do erro: ' .  $e->getLine() . PHP_EOL;
    //     echo 'Mensagem: ' .  $e->getMessage() . PHP_EOL;
    //     // echo 'StackTrace: ' .  $e->getTraceAsString() . PHP_EOL;
    // }


    echo 'Finalizando função 1' . PHP_EOL;
}

function funcao2($tempoDeReg) {
    echo 'Iniciando função 2' . PHP_EOL;
    echo 'Função 2' . PHP_EOL ;

    echo  'Salario ajustado' .  premioSalario(5000, $tempoDeReg) . PHP_EOL;

    intdiv(5/0);
    $array = new SplFixedArray(5);
    $array[10] = 4;

    echo 'Finalizando função 2' . PHP_EOL;
}

/**
 * Undocumented function
 *
 * @param [type] $salario
 * @param [type] $tempoRegistro
 * @return void
 *
 * @throws PremioSalarial
 */
function premioSalario ($salario, $tempoRegistro) {
    if($tempoRegistro <= 90) {
        throw new PremioSalarialException('Você precisar ter mais de 90 dias de registro');
    }
    return $reajuste = $salario + $salario * 0.1;
}

class PremioSalarialException extends Exception {}




echo 'Iniciando o MAN' . PHP_EOL;
funcao1();
echo 'Fim do MAN' . PHP_EOL;