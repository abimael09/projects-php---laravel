<?php
/*
    Quando utilizamos condicionais (if, else if, else), aumentamos a complexidade do nosso código.
    Isso dificulta a leitura. Quanto menos condicionais tivermos, mais natural e fácil se torna
    a leitura. A técnica Early Return ajuda bastante neste caso.
    ---------------------------------------------------------------------------------------------
    Mudando de assunto: dois dos quatro pilares fundamentais da orientação a objetos:

    1-ABSTRAÇÃO, na qual trazemos o que é necessário do "mundo real" ao nosso sistema.
    2-ENCAPSULAMENTO, no qual só devemos expôr o que for necessário da nossa aplicação.
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
use Conta as GlobalConta;

class Conta
{
    // atributos
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    // método Construtor
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

    // métodos Getters e Setters
    // método void NÃO retorna valor, porque é um Setters
    public function sacar (float $valorASacar) : void
    {
        if ($valorASacar > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar (float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo 'Valor precisa ser positivo';
            return;
        }
        $this->saldo += $valorADepositar;    
    }

    public function transferir (float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo) {
            echo 'Saldo indisponível';
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
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
}