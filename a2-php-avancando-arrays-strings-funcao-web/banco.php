<?php
/* 
    O PHP possui uma estrutura de linguagem chamada include que pode ser chamada como
    se fosse uma função, passando como parâmetro o nome do arquivo que
    será incluído: include 'funcoes.php';
    Outra forma também e mais recomendado, para incluirmos um arquivo apenas se ele não tiver
    sido incluído anteriormente, podemos utilizar o require_once:

    Dessa forma, se tentarmos acessar um arquivo que não existe, receberemos um Fatal error
    diretamente no require. Mas qual a diferença entre warning e error? O PHP trabalha com
    três principais níveis de erro:

    - E_WARNING: é um aviso de que o PHP não conseguiu realizar alguma instrução, mas continuará
        a execução do programa.
    - E_NOTICE: ocorre quando o PHP encontra algum problema, mas consegue contorná-lo.
    - E_ERROR: é o PHP informando que ocorreu um problema e não conseguirá continuar com a execução.
*/
# incluindo arquivo de fora com: require_once
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Abimael',
        'saldo' => 10000
    ],

    '123.456.789-11' => [
        'titular' => 'Lety',
        'saldo' => 300
    ],
    
    '123.256.789-12' => [
        'titular' => 'Bianca',
        'saldo' => 100
    ]
];
/*
    À nova função sacar(), cria uma cópia da conta da Maria, mas subtrai 500 reais. Para que
    essa função seja executada, precisaremos passar a conta da Maria (o valor que será modificado
    e devolvido) e o valor que queremos sacar dessa conta.
*/
$contasCorrentes['123.456.789-10'] = sacar (
    $contasCorrentes['123.456.789-10'],
    valorASacar: 500
);

$contasCorrentes['123.456.789-11'] = sacar (
    $contasCorrentes['123.456.789-11'],
    valorASacar: 200
);

$contasCorrentes['123.256.789-12'] = depositar (
    $contasCorrentes['123.256.789-12'],
    valorADepositar: 900
);
/*
    Se chamarmos a função unset() passano como parâmetro uma variável, estaremos executando
    uma função do PHP que REMOVE uma variável da memória, de forma que não teremos mais acesso
    a ela - ou seja, a partir desse ponto a variável deixa de existir. 
*/
unset ($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

/*
    Quando executarmos php banco.php no terminal, o PHP verificará que 500 é maior do que o
    valor na conta de Alberto (300), e, por isso, retornará a $conta sem modificação alguma.
*/

/*foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}*/

?>

<!-- Escrevendo PHP e HTML. Depois de realizarmos todas as manipulações necessárias,
ao invés de utilizarmos o echo e utilizarmos as chaves para delimitar os blocos,
vamos escrever código HTML. Para isso, podemos informar para o nosso interpretador que o código,
a partir de determinado ponto, não é mais PHP, o que é feito com ?>. Assim, o restante do código
será interpretado como texto, e pode inclusive estar em HTML.
Uma estrutura bem simples em HTML, que pode ser construída automaticamente utilizando "! + Tab":
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>    
</body>
</html>

<?php /* Para imprimir algum valor em html com o php podemos usar <?= $valor ?>, exemplo acima: */