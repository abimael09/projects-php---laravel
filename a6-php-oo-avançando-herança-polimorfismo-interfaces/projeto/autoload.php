<?php
/*
    Além de conhecer a função de autoload do PHP, acabamos por implementar a PSR-4.
    Agora queremos registrar uma função que faz o autoload das classes, o que faremos,
    ainda nesse arquivo, com a spl_autpload_register(). Ela recebe por parâmetro uma outra
    função que, por sua vez, recebe uma string cujo valor é o nome completo da classe.

    Quando tentarmos instanciar uma classe chamada Endereco, por exemplo, o PHP perceberá que não
    conhece a classe e, como temos o autoloader, executará essa função para tentar encontrá-la.

    Queremos transformar a string Alura\Banco\Modelo\Endereco em src/Modelo/Endereco.php, afinal,
    "Alura\Banco" é o namespace raiz que representa a pasta "src", o próximo namespace "Modelo"
    é a pasta, e em seguida temos o nome do arquivo ao qual queremos adicionar o .php. Ou seja,
    conseguiremos encontrar o caminho da classe a partir do seu nome completo.

    A ideia é que o caminho do arquivo ($caminhoArquivo) seja o $nomeCompletoDaClasse trocando
    a string Alura\Banco por src. Isso pode ser feito com o auxílio da função str_replace().
    ... O próximo passo será transformarmos a barra invertida \, que é o padrão de diretórios
    do Windows, em barra comum /. Faremos isso adicionando uma nova chamada de str_replace() que
    operará essa substituição sobre a string $caminhoArquivo.

    Porém, como saberemos se devemos utilizar o padrão do Linux,q ue é /, ou o do Windows que
    tínhamos originalmente? O próprio PHP nos fornece uma constante chamada DIRECTORY_SEPARATOR
    cujo valor se altera dependendo do sistema operacional. Ou seja, se estamos no Windows, a
    barra invertida será mantida; no Linux e no Mac, será trocada pelo separador correto, que é /.
    
    Como retorno, teremos:  src\Modelo\Endereco.php
    Já temos o caminho do nosso arquivo, e queremos garantir que isso funcionará independentemente
    da classe que seja carregada. Para isso, incluiremos um operador if que, com file_exits(),
    verificará se $caminhoArquivo existe. Em caso positivo, faremos o require de $caminhoArquivo.
*/
spl_autoload_register (function (string $nomeCompletoDaClasse) {
    $caminhoArquivo = str_replace('alura\\banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }
});