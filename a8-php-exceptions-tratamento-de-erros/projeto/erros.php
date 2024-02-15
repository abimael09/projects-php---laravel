<?php
/*
    Nesta aula, aprendemos:

    A utilizar o finally
    Que nem sempre ele é útil, e às vezes podemos simplesmente colocar o código fora
    do try - catch
    Como o PHP tratava os erros antes da versão 7
    Os principais tipos de erros do PHP:
    Notice
    Warning
    Error (erro fatal)
    Diversas configurações relacionadas à exibição e log de erros
    A tratar os erros utilizando a função set_error_handler
    Que, normalmente, ferramentas especializadas em tratar erros cuidam dessa parte para nós
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso" . PHP_EOL;
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso" . PHP_EOL;
            break;
    }
});

echo $variavel;
echo $array[12];


echo CONSTANTE;
