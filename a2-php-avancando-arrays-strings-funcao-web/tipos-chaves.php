<?php

/*
    Primeiramente, o PHP só consegue trabalhar, em arrays associativos, com chaves dos
    tipos inteiro ou string. Qualquer outro tipo diferente desses vai ser convertido para
    uma string ou inteiro. Repare que, quando adicionamos o valor b, definimos uma
    string 1 como chave. Quando o PHP reconhece que uma chave tem um valor que pode ser
    representado numericamente, ele tenta convertê-la para um inteiro. Nessa conversão,
    ele sobrescreveu o primeiro índice - dessa forma, o "b" substituiu o "a"...

    Por isso, quando estivermos definindo chaves para arrays associativos, elas precisam ter
    um significado. Assim, se tivermos um inteiro, depois uma string, depois um float e depois
    um booleano, tudo isso sendo definido como chave, já perdemos o significado dela. A ideia
    é não só entendermos mais a fundo o funcionamento do PHP, mas também evitarmos esse tipo de
    prática pouco inteligente.
*/

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
    'qualquer_coisa' => 'Teste'
];

foreach ($array as $item) {
    echo $item .    PHP_EOL;
}

/* O ideal é mantermos uma consistência: se as chaves do nosso array são strings, vamos manter
    sempre strings; se são números inteiros, usaremos sempre inteiros.
*/