<?php

namespace alura\banco\modelo;

# Repare que uma classe pode ser abstrata mesmo que ela não tenha métodos abstratos.
abstract class Pessoa
{
    use AcessoPropriedades;
    private string $nome;
    private CPF $cpf;

    public function __construct (string $nome, CPF $cpf)
    {
        $this->validarNome($nome);
        $this->nome=$nome;
        $this->cpf=$cpf;
    }

    public function getNome () : string
    {
        return $this->nome;
    }

    public function getCpf () : string
    {
        return $this->cpf->getCpf();
    }

    final protected function validarNome (string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres...';
            exit();
        }
    }
}