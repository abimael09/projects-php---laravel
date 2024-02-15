<?php
/*
    Uma tupla, em várias linguagens, principalmente em linguagens que tem mais uma pegada de
    programação funcional, nós temos uma estrutura de dados que não existe aqui no PHP, que é
    estrutura de Tuplas. Uma tupla é um pequeno conjunto de elementos onde a posição dele pode
    significar alguma coisa.
*/

# sobre o uso da função list...
//$dados = ['Abimael', 10, 19];
//list ($nome, $nota, $idade) = $dados; # [$nome, $nota, $idade] = $dados;
//var_dump ($nome, $nota, $idade);

$dados = [
    'nome' => 'Abimael', 
    'nota' => 10, 
    'idade' => 19
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; 
//var_dump ($dados);

# funções extract e compact
extract($dados);
var_dump ($nome, $nota, $idade);

var_dump(compact('nome', 'nota', 'idade'));

/*
    As três principais funções de arrays são:
    array filter, que serve para você pegar um array e devolver um novo array com alguns
    elementos filtrados, ou seja, sem alguns elementos. Array map que serve para você pegar
    um array e desse array mapear para um array novo com valores modificados. E array reduce
    que é para você pegar um array e reduzir toda essa lista a um único elemento, por exemplo,
    somar um array ou algo parecido.

    Essas são com certeza as três principais funções, sempre que você ver sobre programação
    funcional esse é um ótimo exemplo de onde utilizar funções anônimas e etc. E, justamente,
    por isso está bastante relacionada à programação funcional, é que essas funções já foram
    ensinadas no Curso PHP treinamento de programação funcional. Obs: Depois, ver o Curso! 
*/