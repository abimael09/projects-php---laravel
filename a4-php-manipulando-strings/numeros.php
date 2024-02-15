<?php
/*
    Strings numéricas no PHP, para recapitularmos. Se uma string começa com número e depois
    só possui espaço, ela é uma string numérica válida. Se ela começa com somente espaços e
    depois tem somente números, ela é uma string numérica válida. Se ela tem números, depois
    um espaço e alguma outra coisa que o PHP consegue ignorar, ele vai dar um aviso informando
    que não é um valor numérico, que ele encontrou algo que não é número, mas ele tenta se virar
    ainda. Agora, se a string começa com qualquer coisa diferente de espaços e números, ela não
    é mais uma string numérica válida.
*/
$anoNascimento = '1997';
$idade = 2023 - $anoNascimento;
echo $idade . PHP_EOL;

if ($anoNascimento == 1997) {
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}