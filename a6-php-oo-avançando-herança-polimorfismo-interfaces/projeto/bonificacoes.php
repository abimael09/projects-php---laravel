<?php

require_once 'autoload.php';

use alura\banco\modelo\CPF;
use alura\banco\modelo\funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use alura\banco\service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor ('Abimael Santos',
    new CPF (cpf: '123.456.789.18'),
    salario: 1000
);

$umFuncionario -> sobeDeNivel();

$umaFuncionaria = new Gerente ('Bianca Silva',
    new CPF (cpf: '321.654.987.10'),
    salario: 3000
);

$umaDiretora = new Diretor ('Amanda Santanta',
    new CPF (cpf: '021.519.987.12'),
    salario: 5000
);

$umEditorVideo = new EditorVideo ('Gustavo Souza',
    new CPF (cpf: '043.519.807.15'),
    salario: 5000
);

$controlador = new ControladorDeBonificacoes();
$controlador -> adcionarBonificacao($umFuncionario);
$controlador -> adcionarBonificacao($umaFuncionaria);
$controlador -> adcionarBonificacao($umaDiretora);
$controlador -> adcionarBonificacao($umEditorVideo);

echo 'Total de Bonificações: '. $controlador -> getTotal() .' R$';
