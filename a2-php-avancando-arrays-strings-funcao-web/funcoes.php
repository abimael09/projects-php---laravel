<?php
/*
    Para o PHP e algumas outras linguagens de programação, não faz diferença na sintaxe,
    afinal elas são definidas e executadas da mesma forma. Em outras linguagens, a forma de
    definir ou chamar uma função ou sub-rotina pode ser diferenciada.

    No PHP, o importante é entender que uma função ou sub-rotina pode retornar um valor.
    Quando ela retorna, a chamada da função passa a representar o valor retornado. Em outros
    casos, ela pode não retornar nada, simplesmente executa algum código.
*/
# sub-rotina com parâmetros
function exibeMensagem($mensagem) {
    echo $mensagem . '<br>';
}

# função sacar, do tipo: array, e tbm com parâmetros/tipos
function sacar (array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

# função depositar, do tipo: array, e tbm com parâmetros/tipos
function depositar (array $conta, float $valorADepositar) : array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem(mensagem: "Depósitos precisam ser positivos");
    }

    return $conta;
}

/*
    A extensão utilizada foi a mbstring. Ela trabalha com caracteres que precisam de mais de
    um byte para serem representados, por exemplo, caracteres acentuados. Sempre que possível,
    utilizear as funções mb_* para manipular às strings.   
    À função: mb_strtoupper(), pega uma string e coloca todos os caracteres em letra maiúscula.
*/
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);

}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li> Titular: $titular. Saldo: $saldo </li>";
}

