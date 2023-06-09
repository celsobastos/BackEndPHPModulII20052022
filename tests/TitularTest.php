<?php

use Impacta\Curso\Helper\Validate;
use Impacta\Curso\Model\Colaboradores\Cpf;
use Impacta\Curso\Model\Colaboradores\Endereco;
use PHPUnit\Framework\TestCase;


use Impacta\Curso\Model\Conta\Titular;

Class TitularTest extends TestCase {

    private Titular $titular;

    protected function setUp(): void {
        $mockEndereco = $this->createMock(Endereco::class);
        $mockCpf = $this->createMock(Cpf::class);

        $this->titular = new Titular (
            'Paulo de Oliveira',
            $mockEndereco,
            $mockCpf,
        );
    }

    public static function somaProvider(): array {
        return [
            'Primeiro test' => [1, 3, 4],
            [3, 5, 8],
            [1, 6, 7],
            [3, 3, 6],
            [4, 10, 14],
        ];
    }

    /**
     * @covers soma
     * @dataProvider somaProvider
     */
    public function testSoma($valor1, $valor2, $esperado) {
        $resultado = $this->titular->soma($valor1, $valor2);
        $this->assertSame($resultado, $esperado);
    }

    /**
     * @covers deposito
     */
    public function testAdicionaDeposito() {
        /**
         * Mock do metodo validar para seu metodo devolver 200
         */
        $mockValidate = $this->createMock(Validate::class);
        $mockValidate
            ->expects($this->once())
            ->method('validar')
            ->willReturn(200);
        $this->titular->valida = $mockValidate;

        /**
         * O metodo validar foi simulado e ele retorna dozentos
         * mesmo passando 5000 por parametro.
         */
        $this->titular->depositar(5000);
        //$this->titular->depositar(500);
        $result = $this->titular->getSaldo();
        $this->assertSame($result, 200.0);
        $this->assertIsFloat($result);
    }
}