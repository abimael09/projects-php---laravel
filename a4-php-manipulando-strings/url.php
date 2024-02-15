<?php

$url = 'https://alura.com.br/';
/*
    Para eu verificar se uma string começa com algum texto específico, posso utilizar
    a função str_starts_with(). Ou seja, ele vai verificar se a minha URL começa
    com https. str_starts_with($url, 'https');.
*/
if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura.';
} else {
    echo 'Não é uma URL segura.';
}

echo PHP_EOL;
/*
    A função: str_ends_with() verifica se a minha string de URL termina
    com .br: str_ends_with($url, '.br');, simples assim, estou verificando se essa URL
    termina com .br. 
*/
if (str_ends_with($url, 'br')) {
    echo 'É um domínio do Brasil';
} else {
    echo 'Não é um domínio do Brasil';
}

echo PHP_EOL;