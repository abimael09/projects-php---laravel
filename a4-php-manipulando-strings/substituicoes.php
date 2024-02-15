<?php 

$texto = 'qualquer coisa poxa e caramba';

# função str_replace é a melhor
echo str_replace (
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
) . PHP_EOL;

# segunda alternativa não tão legal
echo strtr($texto, 'poxa', '***@') . PHP_EOL;
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;

# terceira alternatica mais confusa ainda

$trans = array("hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);
