<?php
/*
    o curso PHP Exceptions: Tratamento de erros! Começamos esse treinamento conversando sobre
    um assunto que, ao menos a princípio, nem parecia relacionado ao tratamento de erros e
    exceções, que é a pilha de execução de um programa. Descobrimos que, na verdade, ela está
    diretamente relacionada à maneira que encontramos um problema em nossos projetos.
    Em seguida, falamos sobre as exceções e erros que o PHP pode lançar. Nesse ponto, vimos
    alguns funções e códigos que poderiam trazer problemas, e aprendemos a tratá-los
    usando o try/catch. Na utilização desta funcionalidade, vimos que é necessário informar o
    tipo desse problema (se é um erro ou uma exceção, se é um tipo de exceção mais específica
    e assim por diante) ou se é um problema genérico que simplesmente pode ser lançado (Throwable).
    Também aprendemos a criar e lançar nossas próprias exceções, conhecimento que utilizamos no
    nosso projeto do banco. Agora, toda vez que um usuário tentar sacar um valor maior do que o
    saldo, uma exceção SaldoInsuficienteException, que nós mesmos criamos e personalizamos, será
    lançada. Já quando um usuário tentar depositar um valor negativo, informamos que isso não é
    possível com uma InvalidArgumentException.
    Ainda nesse assunto, tivemos o desafio de implementar as exceções de validação para CPF e
    Pessoa, e esperamos que você tenha conseguido. Finalizamos esse eixo de estudos conhecendo o
    finally, uma instrução que não tem muita utilidade real nos códigos em PHP, mas que aparece,
    ainda que raramente, em alguns casos.
    Depois de aprendermos bastante sobre essa forma mais atual e correta de tratar erros e
    exceções, conhecemos também a maneira antiga utilizada pelo PHP, pré versão 7.0. Vimos que
    algumas situações inesperadas podem ser tratadas por meio das configurações de erro, que nos
    permitem mostrar ou ocultar os erros, registrá-los e assim por diante. Felizmente, existem
    ferramentas específicas para tratamento de erros, como alguns frameworks mais completos e
    bibliotecas de teste.
    Esse é um treinamento bastante importante, portanto não deixe de compartilhar as suas dúvidas
    e comentários no nosso fórum, e nossos instrutores, moderadores e a comunidade Alura estarão
    dispostos a te ajudar. Esperamos que você tenha gostado, bons estudos e até a próxima!
*/
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (Throwable $problema) {
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    intdiv(1, 0);
    throw new BadFunctionCallException('Essa é a mensagem de exceção');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
