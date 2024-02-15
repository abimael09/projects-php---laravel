<?php

namespace alura\banco\modelo\funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600;
    }
}