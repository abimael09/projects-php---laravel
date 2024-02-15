<?php

namespace alura\banco\modelo\conta;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa () : float
    {
        return 0.03;
    }
}