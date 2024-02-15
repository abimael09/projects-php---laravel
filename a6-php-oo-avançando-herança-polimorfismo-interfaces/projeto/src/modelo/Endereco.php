<?php

namespace alura\banco\modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
*/

use alura\banco\modelo\Pessoa;
use alura\banco\modelo\CPF;
use alura\banco\modelo\Conta;
use alura\banco\modelo\conta\Titular;

final class Endereco
{
    use AcessoPropriedades;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct (string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade=$cidade;
        $this->bairro=$bairro;
        $this->rua=$rua;
        $this->numero=$numero;
    }

    public function getCidade () : string
    {
        return $this->cidade;
    }

    public function getBairro () : string
    {
        return $this->bairro;
    }

    public function getRua () : string
    {
        return $this->rua;
    }

    public function getNumero () : string
    {
        return $this->numero;
    }

    /*
        todos os métodos iniciados com __ são conhecidos como "métodos mágicos" do PHP, e que em
        alguns momentos são chamados de forma automática.
        Sendo assim, implementaremos na classe Endereco o método __toString(), que retornará uma
        string e, no corpo, definirá a formatação do texto. Para isso, retornaremos
        primeiro $this->rua, seguido de $this->numero, $this->bairro e $this->cidade. Para nos
        precavermos em relação a erros, rodearemos cada um desses dados com chaves. 
        Perceba que o método mágico __toString() nos permite representar qualquer objeto como
        string. Lembrando que todos os métodos mágicos do PHP começam com __, e existem vários
        deles. Justamente por essa convenção, a documentação da linguagem não recomenda a criação
        de métodos com __.
    */
    public function __toString () : string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}