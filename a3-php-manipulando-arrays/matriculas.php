<?php
/*
    O que eu quero fazer é: para criar a lista de alunos de 2022, eu quero juntar essas duas
    listas, quero criar uma lista a partir de outras. Como que podemos fazer? Existem algumas
    formas de fazer isso, a mais tradicional, provavelmente a mais comum, é utilizando
    a função array_merge.
*/
$alunos2022 = [
    0 => 'Carlos',
    'Lety',
    'Bia',
    'Jessica',
    'Eduardo',
];

$novosAlunos = [
    'Abimael',
    'Erica',
    'Partricia',
    'Carol',
    'Luan',
];

# $alunos2023 = array_merge($alunos2022, $novosAlunos);
# var_dump($alunos2023);

/*
    Vamos ver uma última forma aqui de como podemos criar um array a partir de outros.
    Aqui vamos conhecer um novo operador legal do PHP. O que eu quero fazer? Ao invés de utilizar
    o array_merge, eu vou fazer o unpacking de arrays, que é basicamente o desempacotamento
    de arrays.
    O que isso quer dizer? Eu vou pegar um array, que é como se fosse um pacote e desempacota-lo
    em algum lugar e eu posso desempacota-lo dentro de outro array.
*/

$alunos2023 = [...$alunos2022, 'Abimael Santos', ...$novosAlunos];
# var_dump($alunos2023);

# adicionando e removendo elementos do array
array_push($alunos2023, 'Alice', 'Bob', 'Chalie');
$alunos2023[] = 'Luís';

array_unshift($alunos2023, 'Stephane', 'Rafaela');

echo array_unshift($alunos2023) . PHP_EOL;

echo array_pop($alunos2023) . PHP_EOL;

var_dump($alunos2023);
