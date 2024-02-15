<?php

# exercício opcional com arrays associativos: CONCLUÍDO
$carros =
[
    'LMS-2232' =>
    [
       'marca' => 'VW',
       'modelo' => 'Golf'
    ],

    'KLM-1324' =>
    [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],

    'OPN-5612' =>
    [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $documento_Carro) {
    echo $placa . ': ' . $documento_Carro['marca'] ."\t". $documento_Carro['modelo'] . PHP_EOL;
}