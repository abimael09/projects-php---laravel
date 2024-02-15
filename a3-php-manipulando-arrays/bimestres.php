<?php

$notasBimestre1 = [
    'Carlos' => 6,
    'Lety' => 8,
    'Bia' => 10,
    'Jessica' => 7,
    'Eduardo' => 9,
];

$notasBimestre2 = [
    'Lety' => 8,
    'Bia' => 9,
    'Jessica' => 7,
    'eduardo' => 10,
    
];

/*
    Agora o que eu quero fazer, por exemplo com minhas notas, é verificar todo mundo que não
    fez a prova no segundo bimestre, alguma coisa desse tipo. Existem vários tipos de 
    arrays .. Obs: Veremos alguns abaixo..
*/

# var_dump(array_diff($notasBimestre1, $notasBimestre2));
# var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
# var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

/* ----------------------------------------------------------------------------------------
$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$array3 = [1, 7, 13];

$diferenca = array_diff($array1, $array2, $array3);
var_dump($diferenca) . PHP_EOL;
------------------------------------------------------------------------------------------- */
/*
Nesse array diff_key vou pegar o resultado, que são os alunos faltantes, nesses alunos faltantes
eu tenho a chave sendo o nome e o valor sendo a nota. Eu quero pegar desses alunos faltantes
somente as chaves. */
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));