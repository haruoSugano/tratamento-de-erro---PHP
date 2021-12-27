<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

try {
    $contaCorrente = new ContaCorrente(
        new Titular(
            new CPF('123.456.789-1'),
            'Helio',
            new Endereco('São Paulo', 'Bairro', 'Rua', '123')
            )
    );
} catch (\Throwable $exception) {
    echo "$exception: Valor inserido é inválida" . PHP_EOL;
}

try {
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo" . PHP_EOL;
}

?>
