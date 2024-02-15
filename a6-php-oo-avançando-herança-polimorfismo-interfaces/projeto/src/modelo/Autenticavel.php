<?php
/*
    Uma forma de utilizarmos a assinatura do método podeAutenticar(), sem necessariamente
    recebermos essa classe, algo que é possível por meio de uma interface.
    O conceito de interface representa, basicamente, uma classe abstrata com todos os seus
    métodos abstratos. Portanto, ao invés de chamarmos nossa Autenticavel de classe abstrata,
    vamos defini-la como interface. Como por definição os métodos de uma interface são abstratos,
    não precisaremos incluir a palavra reservada abstract na assinatura de podeAutenticar().
    Vamos recapitular? Interfaces são basicamente classes abstratas que possuem somente
    métodos abstratos, o que nos permite a implementação de múltiplas interfaces sem problemas,
    já que evitam o problema de herdar dois métodos "iguais" de classes diferentes.  
*/
namespace alura\banco\modelo;

interface Autenticavel
{
    public function podeAutenticar (string $senha) : bool;
}