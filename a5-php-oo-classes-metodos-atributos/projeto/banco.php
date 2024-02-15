<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';
# adcionando_dados_parametro_construtor
$abimael = new Titular (new Cpf ('123.456.789.10'), 'Abimael Santos'); # instanciando class Titular e obj cpf
$primeiraConta = new Conta ($abimael); # instanciando class Conta e param.. obj da class Titular
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300);

echo 'Nome: '. $primeiraConta -> getNomeTitular() . PHP_EOL;
echo 'CPF: '. $primeiraConta -> getCpfTitular() . PHP_EOL;
echo 'Saldo: ' . $primeiraConta -> getSaldo() . ' R$' . PHP_EOL;

$patricia = new Titular (new Cpf('654.123.987.10'), 'Patrícia');
$segundaConta = new Conta ($patricia);
var_dump($segundaConta) . PHP_EOL;

$terceiraConta = new Conta( new Titular( new Cpf ('432.111.888.41'), 'João'));

unset($segundaConta);

echo 'N° de Contas: '. Conta::getNumeroDeContas();