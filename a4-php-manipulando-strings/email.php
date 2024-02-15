<?php
/*
    Identenção de strings. Eu tenho o delimitador chamado de FIM, tudo que tiver de espaço
    antes do FIM, ou seja, do início da linha de código até o início do FIM, o delimitador
    escrito, o PHP vai contar esse número de espaços e dentro da minha string, todo o espaço
    inicial ele vai remover, a mesma quantidade de espaços.
    - Sobre: Heredoc e Nowdoc. A sintaxe de heredoc as variáveis são interpretadas, como
    as aspas " ". Já a sintaxe nowdoc é quando às variáveis não são interpretadas,
    como as aspas simples ' ' em PHP. 
*/
function geraEmail (String $nome) : void
{
    $conteudoEmail = <<<FIM

    Olá, $nome!

    Estamos entrando em contato para
    {motivo do contato}

    {assinatura}

    FIM;

    echo $conteudoEmail;
}

geraEmail('Abimael Santos');