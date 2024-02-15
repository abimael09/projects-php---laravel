<?php
/*
   A função: str_contains($nome);. Busca o primeiro parâmetro, no nosso caso é a palavra 'Santos',
   str_contains($nome, needle: 'Santos');. Retorna um booleano. Isso quer dizer que essa função
   vai retornar verdadeiro se a palavra 'Santos' existir dentro de nome e vai retornar falso
   se 'Santos' não existir em nome.
*/
$nome = 'Abimael Santos';
$ehDaMinhaFamilia = str_contains($nome, 'Santos');

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha Família!" . PHP_EOL;
} else {
    echo "$nome não é da minha Família!" . PHP_EOL;
}

/* --------------------------------------------------------------------------------------------- 
    var_dump($resultado = str_contains('Teste de string', 'de')); retorna bool(true) - Exercício
*/
