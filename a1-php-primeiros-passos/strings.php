<?php

# $idade = 28;
// o \t é para tab de espaço
// NOVA/QUEBRA DE LINHA: \r ou \n ou (PHP_EOL : para compatibilidade geral dos Sistemas Operacionais)
# echo "Olá mundo" . PHP_EOL;
# echo "Eu tenho $idade anos"; // Ex: se quiser informar a variavel com aspas faz isso: \"$idade\"

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos\n";

echo "Você tem $idade anos. Pode entrar";
