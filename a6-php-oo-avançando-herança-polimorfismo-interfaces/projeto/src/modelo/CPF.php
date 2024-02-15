<?php

namespace alura\banco\modelo;

use alura\banco\modelo\Pessoa;
use alura\banco\modelo\Endereco;
use alura\banco\modelo\Conta;
use alura\banco\modelo\conta\Titular;

final class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf() : string
    {
        return $this->cpf;
    }
}

/*
    
class CPF
{
    private $numero;
    
    # um dos exemplos de como validar o CPF
    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($numero === false) {
            echo "Cpf inválido";
            exit();
        }
        $this->numero = $numero;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
}
*/