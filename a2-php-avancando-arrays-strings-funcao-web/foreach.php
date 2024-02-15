<?php

$contasCorentes =
[
    213456789 =>
    [
        'titular' => 'Abimael',
        'saldo' => 1300
    ],
    
    712345698 =>
    [
        'titular' => 'Bianca',
        'saldo' => 1000
    ],
    
    412356789 =>
    [
        'titular' => 'Fernanda',
        'saldo' => 900
    ]
];

/*
    foreach.php - "for each" de "para cada". 
*/
foreach ($contasCorentes as $cpf => $conta){
    echo $cpf . PHP_EOL; 
}