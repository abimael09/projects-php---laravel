<?php

$notas = [
    10,
    9,
    8,
    7
];

$notasOrdenadas = $notas;
/*
    O que eu quero fazer é pedir: "PHP, ordena para mim essas notas." sort(&notas);.
    Para eu pedir alguém para ordenar o nome da função é sort. Repare que aqui o PHP mostra
    a assinatura das funções, que são: a função, os parâmetros dela e o que ela retorna.
    A função: sort ordena de forma crescente.
*/
sort($notasOrdenadas);

echo "Desordenadas:";
/*
    o var_dump é uma função que exibe uma variável contendo o seu tipo, toda a sua estrutura.
    É algo que utilizamos para visualizar um dado, não é algo que utilizamos em produção para
    criar realmente uma página Web, por exemplo, só usamos aqui em tempo de desenvolvimento
    para entender o que tem dentro de uma variável.
*/
var_dump($notas);

echo "Ordenadas:";
var_dump($notasOrdenadas);