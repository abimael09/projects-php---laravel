<?php

use alura\banco\modelo\conta\{ContaCorrente, ContaPoupanca, Titular};
use alura\banco\modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente (
    new Titular ( new CPF (cpf: '123.456.789.10'), 'Abimael Santos',
        new Endereco (cidade: 'Novo Horizonte', bairro: 'Imbassay', rua: 'Rua LaVida', numero: '439A')
    )
);

$conta -> depositar (valorADepositar: 500);
$conta -> sacar (valorASacar: 100);
echo 'Saldo Atual: '. $conta -> getSaldo() .' R$';            