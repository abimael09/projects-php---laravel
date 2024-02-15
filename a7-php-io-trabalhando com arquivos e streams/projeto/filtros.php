<?php
/**
 * Temos sempre um fluxo de entrada, independentemente da origem. Isso passa pela nossa aplicação,
 * seja onde a nossa aplicação estiver rodando, seja na linha de comando, seja uma aplicação Web,
 * ou uma aplicação servindo uma API para mobile, qualquer coisa. Nós temos um fluxo de entrada,
 * lemos o arquivo e podemos também escrever nesse arquivo, podemos mandar dados para a rede.
 * Podemos, como fazemos, simplesmente com echo, mandar dados para o console. Então, esses são
 * os chamados fluxos ou streams de dados. Então é assim que vamos passar a nos referir,
 * anteriormente eu dizia arquivo, agora vou dizer stream de dados. Só que um assunto ainda mais
 * interessante sobre streams de dados, como temos feito até agora, é isso que tem acontecido.
 * Eu tenho lido um arquivo ou no último exemplo onde li da rede, fiz uma requisição para a API,
 * faço o processamento que tenho que fazer e mando uma saída. Só que agora, antes de realizar o
 * processamento que tenho que fazer, ou seja, durante esse processo do fluxo de entrada,
 * enquanto o fluxo de entrada está chegando na minha aplicação, eu quero executar alguma coisa.
 * Ou seja, antes da minha aplicação executar exatamente o que tem que ser executado com esse
 * fluxo, quero transformar esse fluxo e realizar algum tipo de filtro nele. E isso também
 * poderia servir para a saída, ou seja, na hora de enviar esses dados, na hora de escrever no
 * arquivo, na hora de enviar um arquivo em FTP, eu poderia também realizar esse filtro, essa
 * manipulação. Mas, nesse exemplo, nós vamos trabalhar com a parte de entrada, ou seja, quando
 * eu for ler algum arquivo, eu quero realizar alguma espécie de filtro, algum tipo de manipulação.
 * 
 * Agora, antes de fazer a leitura, ou seja, ler linha a linha ou ler o conteúdo todo, isso não
 * importa, eu quero aplicar um filtro, quero adicionar um filtro a esse stream. Então vou chamar
 * a função que faz o stream, stream_filter_append(), ou seja, adiciona um filtro a um stream.
 * ntão vou no php -a para executarmos aquele shell interativo.
 * Posso dar um var_dump(stream_get_filters()). Isso vai trazer todos os filtros disponíveis e
 * aqui tenho alguns. O que quero executar agora é esse, toupper. O string.toupper vai colocar
 * todos os caracteres em letra maiúscula.
 * Deixe-me executar o quit. Então string.toupper. Com isso, agora que já apliquei o filtro,
 * quando for ler esse conteúdo, quando for ler esse arquivo, ele vai me entregar os dados já
 * com as letras maiúsculas.
 */


require 'MeuFiltro.php';

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize('lista-cursos.txt'));