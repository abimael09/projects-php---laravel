<?php
/*
    Eu tenho aqui um array multidimensional, ou seja, um array de arrays e cada um desses arrays
    é outro array associativo.
*/
$notas = [
    [   # array associativo
        'aluno' => 'Dany',
        'nota' => 10
    ],
    [   # array associativo   
        'aluno' => 'João',
        'nota' => 6
    ],
    [   # array associativo
        'aluno' => 'Abimael',
        'nota' => 9
    ]   
];
/*
    Criando uma função que ordena algo, que ensina a PHP a ordenar. Essa função de comparação,
    a função que vamos passar parâmetro, precisa retornar um inteiro que é menor do que,
    igual a ou maior do que zero. Se o primeiro argumento for considerado respectivamente menor,
    igual ou maior do que o segundo. Ou seja, deixa eu simplificar um pouco aqui,
    essa função vai receber dois parâmetros, esses dois parâmetros são dois elementos do meu array.
*/
function ordenaNotas (array $nota1, array $nota2): int
{
    /*if ($nota1 ['nota'] > $nota2 ['nota']) {
        return -1;
    } 
    
    if ($nota2 ['nota'] > $nota1 ['nota']) {
        return 1;
    }
    return 0;*/
    return $nota2['nota'] <=> $nota1['nota']; # operador <=> que simplifica à solução dos ifs .. 
}

# a função: usort ordena de forma decrescente
usort($notas, callback: 'ordenaNotas');
var_dump($notas);

/*
    Vamos verificar se o Abimael fez essa prova, por exemplo. A forma mais simples para
    eu poder fazer isso seria, por exemplo, dentro de uma função ou direto aqui, fazer um
    for it, por exemplo, nas minhas notas alunos e sua respectiva nota. E aqui eu verifico,
    se o aluno for igual a Abimael
    foreach ($notas as $aluno => $nota) {
        if ($aluno === ''Vinicius'') { return true;
    }
    Isso quer dizer que sim, posso retornar esse true dentro de uma função e verificar:
    sim, Vinícius fez essa prova.

    é mais comum vermos essa função aqui. De novo, assim como sizeof e count são iguais, são
    a mesma função com nomes diferentes, só que é mais comum vermos dessa forma. E ela espera
    dois parâmetros, a chave que eu quero buscar, ou seja, Abimael e onde eu quero buscar
    essa chave, no meu array notas: 
        array_key_exists(key: ''Abimael'', $notas);
    Isso aqui vai me retornar um verdadeiro, var_dump(array_key_exists(key:''Abimael'', $notas);
    Isso aqui verifica se um valor, uma variável está definida e quando eu passo um item de
    array para essa função ele verifica se dentro desse array existe essa chave, esse índice
    não é nulo:
    var_dump(isset($notas[‘Abimael’]));

    Repare que de forma simples conseguimos verificar se um valor existe e é diferente de nulo.
    Às vezes, voltando para aquele cenário que talvez não fique tão claro, uma pessoa pode
    passar um parâmetro na URL, por exemplo, mas esse parâmetro não tem valor, eu só quero
    saber se o parâmetro está lá ou não. Nesses cenários array key exists é o mais interessante,
    é ele que vamos utilizar.
*/

/*
    Para exibir aqui, alguém tirou 10? echo ''Alguém tirou 10?'' . PHP_EOL;. Vou quebrar a linha,
    e como posso verificar isso? Eu posso fazer aqui um var-dump para exibir verdadeiro ou falso,
    se in array, ou seja, dentro desse array existe o valor 10 no meu array de notas:
    var_dump(in_array(needle: 10, $notas));
*/

// array_key_exists = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e não é nula

/* Eu poderia fazer um for each, por exemplo, e verificar lá o valor. Só que, de novo, o PHP
    já tem essa facilidade para nós através do array search. Eu vou buscar o valor 10 dentro das
    minhas notas e o que isso aqui vai retornar é a chave que possui esse valor, que é a chave Ana.
    É só isso que eu preciso echo array_search(needle: 10, $notas);
    tenho aqui o meu elemento sendo exibido informando que quem tirou 10 foi a Dany.

    Caso o array search não encontre esse valor aqui, por exemplo, se ele tentar buscar o
    elemento 6, aqui o nosso in array retornaria falso. Porque se o valor existe, ele retorna
    verdadeiro e se não existe ele retorna falso. Vamos ver o que esse array searh nos devolve,
    vou fazer: var_dump(array_search(needle 6, $notas)); e executar.
*/