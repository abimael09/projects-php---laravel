<?php
/*
    Aprendemos, então, dois conceitos muito importantes: é possível chamar métodos da classe base
    por meio da palavra parent, e podemos acessar atributos e métodos da classe base se eles
    forem definidos como protected. Não deixe de fazer os exercícios dessa aula para fixar esses
    conteúdos!
*/
namespace alura\banco\modelo\conta;

use alura\banco\modelo\Autenticavel;
use alura\banco\modelo\Pessoa;
use alura\banco\modelo\CPF;
use alura\banco\modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent :: __construct ($nome, $cpf);
        $this->endereco=$endereco;                
    }

    public function getEndereco () : Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar (string $senha) : bool
    {
        return $senha === 'abcd';
    }
}