<?php
/*
    Perceba que o método mágico __toString() nos permite representar qualquer objeto como string.
*/
use alura\banco\modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('cidade: A', 'bairro: B', 'rua: C', 'numero: 44D');
$outroEndereco = new Endereco('outra cidade', 'outro bairro', 'outra rua', 'outro numero');

echo $umEndereco . PHP_EOL;
echo $outroEndereco;