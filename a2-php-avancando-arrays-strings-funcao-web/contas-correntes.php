<?php

$conta1 = [
    'titular' => 'Abimael',
    'saldo' => 1300
];

$conta2 = [
    'titular' => 'Bianca',
    'saldo' => 1000
];

$conta3 = [
    'titular' => 'Fernanda',
    'saldo' => 900
];

$contasCorentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorentes); $i++) {
    echo $contasCorentes[$i] ['titular'] . PHP_EOL;
}