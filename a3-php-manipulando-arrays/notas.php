<?php

$notas = [
    'Carlos' => 8,
    'Lety' => 6,
    'Bia' => 7,
    'Jessica' => 10,
    'Eduardo' => 9,
];

# existem várias outras funções de ordenação como asort, ksort e outras..
# a função: krsort , mostra o resultado em ordem alfabética da chave/nome e não pela nota. 
krsort($notas);
var_dump($notas);

/*
  Só que agora eu quero começar a fazer algumas verificações. Imagina que você já está 
  trabalhando em um sistema complexo, grande, uma função sua recebe um array por parâmetro 
  e aí você quer fazer algumas verificações, você quer saber se pode fazer um for nela porque 
  você precisa ter um contador que vai utilizar em outro lugar.

  Você não queria utilizar for each para poder utilizar um contador ou às vezes você está 
  trabalhando em um código que não está tão bem escrito, vamos dizer assim, e você quer garantir 
  que uma variável é um array. Como fazemos essas verificações?

   Temos a função get type, essa função recebe uma variável e retorna o tipo dela:
   echo gettype($notas);
   Vou colocar isso aqui no final e executar. Repare que no final temos array. Se eu quiser
   verificar se algo é um array eu poderia fazer, por exemplo:
    if (gettype($notas) === ''array'' {
        echo 'Sim, é um array';
    };
  
   Só que desde o PHP 8.1, que é relativamente recente, temos uma função muito simples que é
   chamadaarray is list, array_it_list($notas).

   Essa função recebe um array por parâmetro e retorna verdadeiro se esse array for em numérico,
   ou seja, todas as suas chaves são números, ele começa com o zero e a partir do zero são todas
   crescentes. Ou seja, ele não pula uma chave, por exemplo.

    Se eu fizer um var_dump(array_it_list($notas)); ele vai exibir para nós um falso porque
    isso aqui não é uma lista, não é um array numérico sequencial, quando eu executo eu espero
    ver um false. Ou seja, eu não poderia utilizar aquele for, tenho aqui um false.

 */


 $arrayt = ['primeiro', 1 => 'segundo', 'terceiro'];
 echo [$arrayt] . PHP_EOL;