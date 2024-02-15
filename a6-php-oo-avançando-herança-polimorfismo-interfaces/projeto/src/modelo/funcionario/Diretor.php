<?php

namespace alura\banco\modelo\funcionario;

use alura\banco\modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao () : float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar (string $senha) : bool
    {
        return $senha === '1234';
    }
}