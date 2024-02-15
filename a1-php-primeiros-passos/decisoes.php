<?php

/*for ($i=0; $i<3; $i++) {
    echo "Qual o seu nome?", $nome . PHP_EOL;
    echo "Informe sua idade: ", $nome . PHP_EOL;
}

if ($nome == "" && $idade >= 18) {
    echo "Seu nome é ". $nome . PHP_EOL ."Você tem ". $idade ."anos". PHP_EOL ."Seja Bem-vindo(a)";
} else {
    echo "Vcê só pode entrar se tiver a partir de 18 anos.";
}

--------------------------------------------------------------------------------------------------

$idade = 17;

echo "Você só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
}
echo "Você só tem $idade anos. Você não pode entrar"; 

$idade = 21;
$numeroDePessoas = 1;
-------------------------------------------------------------------------------------------------

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
-------------------------------------------------------------------------------------------------
*/

$idade = 16;
$numeroDePessoas = 3;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";


