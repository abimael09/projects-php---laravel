<?php

use alura\banco\modelo\funcionario\Diretor;
use alura\banco\service\Autenticador;
use alura\banco\modelo\CPF;
use alura\banco\modelo\funcionario\Gerente;

require_once 'autoload.php';

$autenticador = new Autenticador ();
$umDiretor = new Gerente ('João Silva',
    new CPF (cpf: '357.111.055-80'),
    salario: '10000'
);

$autenticador -> tenteLogin ($umDiretor, '4321');