<?php
/*
    Seria interessante se existisse uma forma do próprio PHP copiar código de algum local e
    injetá-lo na classe desejada. O PHP na verdade possui tal funcionalidade, e ela se chama
    trait.
    Para testarmos, criaremos no diretório "Modelo" uma nova classe "AcessoPropriedades"
    utilizando o template "Trait" disponibilizado pela IDE. 
    Repare que a estrutura é bem parecida com a de uma classe, alterando somente a
    palavra class para trait. Removeremos a definição do método __get() da classe Endereco e
    o passaremos para a trait que criamos. 
    Na aula de namespaces comentamos que a palavra use poderia significar coisas diferentes
    dependendo de onde ela é colocada em uma arquivo. Nesse caso, como estamos colocando-a
    diretamente dentro de uma classe, quer dizer que estamos utilizando uma trait. Isso implica
    que o PHP irá "colar" o conteúdo da trait no local informado, como se estivéssemos fazendo
    um "copia e cola" dos seus métodos, permitindo acesso ao __get().
    Isso também é vantajoso pois podemos utilizar quantas traits forem necessárias. Isso não
    é uma herança pois o PHP executa processos diferentes por baixo dos panos. Da mesma forma
    que incluímos o use AcessoPropriedades na classe Endereco, podemos fazer o mesmo em Pessoa.
*/
namespace alura\banco\modelo;

trait AcessoPropriedades
{
    /*
        exibida a lista de métodos mágicos disponíveis. Por exemplo, temos o __call(), que é
        chamado quando tentamos executar um método que não existe ou que é privado; o __clone(),
        usado para criar uma cópia de um objeto; __debugInfo(), executado quando fazemos
        o var_dump() de uma referência que aponta para uma instância; e o __destruct(), o método
        destrutor que já conhecemos anteriormente.
        O método que estamos buscando é o __get(), que recebe como parâmetro uma string
        representando o nome do atributo que queremos acessar. Para provarmos isso, faremos
        um echo do $nomeAtributo recebido no método. 
    */
    public function __get(string $nomeAtributo)
    {
        $metodo = 'recupera' . ucfirst ($nomeAtributo);
        return $this->$metodo();
    }
}