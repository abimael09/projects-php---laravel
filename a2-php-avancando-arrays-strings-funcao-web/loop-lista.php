<?php

# Array
$idadeList = [21, 23, 19, 25, 30, 41, 18];

# a função: count(), faz à contagem de um Arraylist. Ex: 0,1,2,3,4,5,6 = 7 posições/espaços.
for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}