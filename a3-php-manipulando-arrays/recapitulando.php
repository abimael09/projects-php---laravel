<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três'
];

foreach ($array as $chave => $numero) 
{
    echo "$chave em português é: $numero" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL; 
