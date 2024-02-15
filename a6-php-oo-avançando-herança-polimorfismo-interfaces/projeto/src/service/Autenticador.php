<?php

namespace alura\banco\service;

use alura\banco\modelo\Autenticavel;

class Autenticador
{
    public function tenteLogin (Autenticavel $autenticavel, string $senha) : void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Ok. Usuário logado no sistema!';
        } else {
            echo 'Ops. Senha incorrreta!';
        }
    }
}