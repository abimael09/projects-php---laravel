<?php
/*
    Quando utilizamos condicionais (if, else if, else), aumentamos a complexidade do nosso código.
    Isso dificulta a leitura. Quanto menos condicionais tivermos, mais natural e fácil se torna
    a leitura. A técnica Early Return ajuda bastante neste caso.
    ---------------------------------------------------------------------------------------------
    Mudando de assunto: OS QUATRO PILARES FUNDAMENTAIS DA ORIENTAÃO A OBJETOS:

    1-ABSTRAÇÃO, na qual trazemos o que é necessário do "mundo real" ao nosso sistema.
    2-ENCAPSULAMENTO, no qual só devemos expôr o que for necessário da nossa aplicação.
    3-HERANÇA, é uma das formas de reutilizar código, fazendo uma classe estender outra, ou seja,
    herdar tudo que uma classe base tem, e adicionar comportamentos específicos.
    4- POLIMORFISMO, este 4º princípio está diretamente ligado ao 3º (herança), pois através da
    herança conseguimos alcançar o polimorfismo.
    Polimorfismo é a capacidade de um objeto poder ser referenciado de várias formas (cuidado,
    polimorfismo não quer dizer que o objeto fica se transformando, muito pelo contrário,
    um objeto nasce de um tipo e morre daquele tipo, o que pode mudar é a maneira como nos
    referimos a ele).
    Com isso podemos, por exemplo, receber um Funcionario por parâmetro em uma função/método e
    passar um Gerente. Podemos nos referir à instância de Gerente de mais de uma forma, e isso
    nos pode ser útil em vários casos, como já vimos nesta aula.
    ---------------------------------------------------------------------------------------------
    Mudando de assunto: Assim, começamos a entender o "ciclo de vida" dos objetos: eles são
    criados, nós executamos aquilo que é necessário e, em determinado momento, eles são apagados
    da memória. 
    ---------------------------------------------------------------------------------------------
    Ao criar uma instância, o método mágico construtor (__construct) é executado
    Quando uma instância deixa de existir, seu método mágico destrutor (__destruct) é executado
    ---------------------------------------------------------------------------------------------
    Também podemos ter membros (atributos e métodos) da própria classe, e não de cada instância
    Membros da classe são chamados de membros estáticos
    --------------------------------------------------------------------------------------------
    - Uma classe deve ter apenas uma responsabilidade, deve ser concisa
    É possível que um objeto tenha outro objeto como valor de um de seus atributos. Isto é
    chamado de composição.
    A composição pode (e deve) ser utilizada ao definir uma estrutura complexa de classes
*/

namespace alura\banco\modelo\conta;

use alura\banco\modelo\Pessoa;
use alura\banco\modelo\CPF;
use alura\banco\modelo\Endereco;
use alura\banco\modelo\conta\Titular;

abstract class Conta
{
    # atributos
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;
    
    # método Construtor
    public function __construct(Titular $titular) # métodos mágicos
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

public function __destruct() #métodos mágicos
{
    self::$numeroDeContas--;
}

    // métodos Getters e Setters. O void NÃO retorna valor, porque é um Setters
    public function sacar (float $valorASacar) : void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar (float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo 'Valor precisa ser positivo';
            return;
        }
        $this->saldo += $valorADepositar;    
    }

    public function getCpfTitular () : string
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular() : string
    {
        return $this->titular->getNome();
    }

    // métodos Getters RETORNAM valores, porque tem saídas por TIPOS primitivos 
    public function getSaldo () : float
    {
        return $this->saldo;
    }

    # Também é possível criar métodos estáticos (static)!
    public static function getNumeroDeContas () : int
    {
        return Conta::$numeroDeContas;
    }

    /* 
        Ao definirmos um método como abstrato, a ide passará a indicar um erro em todas as classes
        que não o implementem. Note que, nesse momento, teremos um erro na classe Conta. Isso
        ocorre porque, para que uma classe possua métodos abstratos, ela mesma também precisa ser
        definida como abstrata.
        Note que todas as classes que estendem de Conta precisarão implementar o método abstrato
        percentualTarifa(), mas a Conta em si não possui esse método. Portanto, se tentássemos
        instanciá-la diretamente, a implementação do método não existiria. Isso significa que a
        classe em si não está "pronta", ou seja, não está inteiramente implementada, e
        é exatamente isso que a palavra "abstrata" quer dizer. 
    */
    abstract protected function percentualTarifa () : float;
}