<?php

namespace alura\banco\service;

use alura\banco\modelo\funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adcionarBonificacao (Funcionario $funcionario)  #polimorfismo
    {
        $this->totalBonificacoes += $funcionario -> calculaBonificacao();
    }

    public function getTotal () : float
    {
        return $this->totalBonificacoes;
    }
}