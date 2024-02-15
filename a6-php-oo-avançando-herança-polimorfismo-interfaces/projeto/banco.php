<?php
/*
    Se definimos uma classe utilizando um namespace, também precisaremos informá-lo ao utilizarmos
    essa classe. Isso pode ser feito diretamente na sua utilização, passando o seu endereço
    completo, ou com a instrução use no início do arquivo (fora da definição de qualquer classe
    ou função). Com as classes "importadas", poderemos utilizá-las normalmente com seu nome mais
    curto. 
*/
require_once 'autoload.php'; # chamando o arquivo autoload das classes

use alura\banco\modelo\conta\Titular; # importação USE namespace e as classes
use alura\banco\modelo\CPF;
use alura\banco\modelo\Endereco;
use alura\banco\modelo\conta\Conta;

# instanciando classes: Titular, CPF e Endereco com Objts / adcionando_dados_parametro_construtor
$endereco = new Endereco ('Ilhéus', 'um bairro', 'minha rua', '784');
$abimael = new Titular (new CPF ('123.456.789.10'), 'Abimael Santos', $endereco); 
$primeiraConta = new Conta ($abimael); # instanciando class Conta e param.. obj da class Titular
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300);

echo 'Nome: '. $primeiraConta -> getNomeTitular() . PHP_EOL;
echo 'CPF: '. $primeiraConta -> getCpfTitular() . PHP_EOL;
echo 'Saldo: ' . $primeiraConta -> getSaldo() . ' R$' . PHP_EOL;

$jhennifer= new Titular (new CPF ('654.123.987.10'), 'Jhennifer', $endereco);
$segundaConta = new Conta ($jhennifer);
var_dump($segundaConta) . PHP_EOL;

$outroEndereco = new Endereco ('a', 'b', 'c', '1d');
$terceiraConta = new Conta( new Titular( new CPF ('432.111.888.41'), 'João', $outroEndereco));

unset($segundaConta);

echo 'N° de Contas: '. Conta::getNumeroDeContas();