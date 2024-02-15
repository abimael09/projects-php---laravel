<?php
/*
    Vou criar um arquivo chamado "regex" porque assim abreviamos Regular Expression ou
    Expressão Regular, "regex.php".
*/
$telefones = ['(24) 99999 - 9999', '(21) 99999 - 8888', '(24) 92222 - 2222'];

foreach ($telefones as $telefone)
{   # função: preg_match do PHP, avaliando cada um dos telefones,
    # com a expressão regular: ([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}
    $telefoneValido = preg_match (
        '/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
        $telefone,
        $correspondencia
    );

    var_dump($correspondencia);

    if ($telefoneValido) {
        echo 'Telefone Válido' . PHP_EOL;
    } else {
        echo 'Telefone Inválido' . PHP_EOL;
    }

    echo preg_replace(
        '/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
        '(XX) \2',
        $telefone
    ) . PHP_EOL;

}