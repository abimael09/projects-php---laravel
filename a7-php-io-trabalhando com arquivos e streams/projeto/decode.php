<?php
/*
A partir do PHP 8.2 as funções utf8_encode e utf8_decode estão marcadas como
descontinuadas (DEPRECATED).
Agora podemos usar a função: mb_convert_encoding para substituir ...
*/
$arquivo = fopen ('nomes.csv', 'w');

fputs ($arquivo, 'Nomes' . PHP_EOL);
$nomes = [
    'João',
    'Patrícia',
    'Graça',
    'Vitória'
];

foreach ($nomes as $nome)
{
    fputs ($arquivo, mb_convert_encoding ($nome,'Windows-1252', 'UTF-8')) . PHP_EOL;
}

echo $arquivo . PHP_EOL;

fclose ($arquivo);

/*
Nesta aula, aprendemos:

    O que são conjunto de caracteres (charsets)
    Quais são os principais charsets utilizados
    O que é e porque aderir ao UTF-8
    Como converter charsets utilizando PHP


*/