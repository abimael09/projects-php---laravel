<?php
/*
    Sabemos que todo funcionário de uma empresa tem um cargo. Portanto, podemos afirmar que ser
    um funcionário de uma empresa é algo mais abstrato do que, por exemplo, ser um diretor ou
    gerente de uma empresa; por sua vez, também podemos afirmar que os cargos são conceitos mais
    concretos dentro de uma empresa do que simplesmente ser um funcionário.

    No nosso sistema, a classe Funcionario é um conceito, e não está pronta/apta para ser
    utilizada como objeto. Justamente por isso a chamamos de abstrata. Já um método abstrado
    é uma indicação de que aquela implementação é necessária em todas as classes que também
    representem um funcionário, ou seja, as classes filhas, mas não existe uma implementação
    padrão desse método.

    Sempre que tivermos a palavra abstract no código, sabemos que ela está relacionada a herança.
    No caso, alguma classe precisa estender de Funcionario para que suas características façam
    sentido. Tais classes, por sua vez, precisarão implementar os métodos abstratos da
    classe base/mãe.

    Isso garante que, ao cessarmos uma instância de Funcionario no método adicionaBonificacaoDe(),
    teremos também acesso ao método calculaBonificacao(). Se removermos a implementação abstrata
    de calculaBonificacao() da classe Funcionario e tentarmos acessar esse método em
    adicionaBonificacaoDe(), a própria IDE nos indicará que será impossível encontrá-lo.

    O PHP funciona de maneira diferente de outras linguagens estritamente/estaticamente tipadas,
    pois chamará o método calculaBonificacao() mesmo que o objeto recebido em
    adicionaBonificacaoDe() não seja do tipo Funcionario. Se o método existir, ele será
    encontrado; do contrário, incorreremos em um erro.

    Da mesma forma que Funcionario, faz sentido transformarmos a classe Pessoa em abstrata
    - afinal, em nosso sistema, temos funcionários (com seus respectivos cargos) ou titulares de
    uma conta.
*/
namespace alura\banco\modelo\funcionario;

use alura\banco\modelo\Autenticavel;
use alura\banco\modelo\Pessoa;
use alura\banco\modelo\CPF;

abstract class Funcionario extends Pessoa 
{
    private string $salario;

    public function __construct (string $nome, CPF $cpf, float $salario)
    {
        parent :: __construct ($nome, $cpf);
        $this->salario=$salario;
    }

    public function alterarNome (string $nome) : void
    {
        $this->validarNome($nome);
        $this->nome=$nome;
    }

    public function recebeAumento (float $valorAumento) : void
    {
        if ($valorAumento < 0) {
            'Aumemto deve ser positivo';
            return;
        }

        $this->salario += $valorAumento;
    }

    public function getSalario () : float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao () : float;
}