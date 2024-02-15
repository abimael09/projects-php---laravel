<?php

#  tentando extrair dessa variável $email uma substring
$nome = 'Vinícius Dias';
$email = 'vinícius@alura.com.br';
$senha = '123';

echo mb_strlen($senha) . PHP_EOL;

/*
    A função chamada strlen(), len de length, de comprimento. Isso só espera um parâmetro,
    que é a string que você quer medir e ela vai devolver para você o tamanho dessa string.
    Se eu exibir, com uma quebra de linha no final, quando eu executo esse código, vou ter o
    número 3 sendo exibido.
    Isso permite que contemos uma string. Eu posso verificar
    em ig (strlen($senha) < 8) { echo 'Senha insegura' . PHP_EOL }. Dessa forma, eu consigo
    verificar o tamanho de uma string. Ele exibiu para nós "Senha insegura".
*/
if (mb_strlen($senha) < 8) {
    echo 'Senha Insegura' . PHP_EOL;
}


/*
    Temos str e eu quero buscar a posição de uma string, $posicaoDoArroba - strpos();, de position.
    E em strpos() eu vou dizer onde quero buscar, eu quero buscar na variável e-mail e o que
    eu quero buscar, eu quero buscar a string arroba:
    $posicaoDoArroba = strpos($rmail, needle: '@');. 
    Estou colocando um caractere,
    mas eu poderia colocar isso: $posicaoDoArroba = strposi($email, needle: '@alura.com.br');
*/
$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0 , $posicaoDoArroba) . PHP_EOL;
/*
    Se eu quero, por exemplo, pegar o tamanho de uma string multibyte, ao invés de strlen(),, 
    eu vou utilizar o mb_strlen(). Se eu quero transformar uma string em letra maiúscula,
    eu vou usar mb_strtouuper(). Muitas funções que estamos acostumados a trabalhar de string,
    temos o equivalente, que é o mb. As funções que precisamos diferenciar isso de multibyte.
*/
echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

# passando nome/sobrenome por parametro com a função: list, e separando com a função: explode();  
list ($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

# variável $csv, com valores separados por vírgula pelo explode(),
# e com retorno em array pelo var_dump
$csv = 'Vinícius Dias,24,vinicius@alura.com.br';
var_dump(explode(',', $csv));