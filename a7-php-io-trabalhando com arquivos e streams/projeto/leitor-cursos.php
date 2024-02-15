<?php
/**
 * Então tenho um arquivo com uma lista de cursos e preciso, utilizando PHP, ler essa lista de
 * cursos. reciso ler ele como um todo. Então vou criar um arquivo chamado de leitor-cursos.
 * Perfeito, criei um arquivo. Então para abrir esse arquivo, se falarmos “abrir” em inglês é
 * a palavra open. Então será que existe uma função chamada open? Mas, open o quê? O que estou
 * tentando abrir? Um arquivo. Um “arquivo” em inglês é file. Então a função para abrir um
 * arquivo em PHP é f de file, open. Com essa função eu consigo de abrir um arquivo para que eu
 * consiga ler, escrever ou fazer qualquer outro tipo de manipulação com ele. Essa função recebe,
 * a princípio, dois parâmetros. Receberem outros vários parâmetros, mas o que vamos usar por
 * enquanto são dois parâmetros. O primeiro parâmetro é o arquivo queremos abrir. Aqui é
 * lista-cursos.txt que é nome desse arquivo que tem todos os cursos. O segundo parâmetro indica
 * o que quero fazer com esse arquivo - vamos falar bem mais sobre ele mais para frente.
 * Inicialmente eu quero ler. Então vou colocar um r de read, porque por enquanto só quero ler
 * esse arquivo. Essa função me retorna como se fosse um ponteiro para esse arquivo, um recurso,
 * que posso chamar de arquivo. Perfeito.
 * - ABAIXO A PRIMEIRA FORMA DE LER ARQUIVOS LINHA À LINHA.
 * 
 *      $arquivo = fopen ('lista-cursos.txt', 'r');    
 *      while (!feof($arquivo)) {
 *          $curso = fgets ($arquivo);
 *          echo $curso;
 *      }
 *      fclose($arquivo); 
 * ----------------------------------------------------------------------------------------------
 */


/**
 * ABAIXO SEGUNDA FORMA DE LER ARQUIVOS COMPLETO (RECOMENDAVEL SOMENTE PARA PEQUENOS ARQUIVOS)
 * Ler é read em inglês e se todas as funções de arquivo estão começando com a letra “F”,
 * suponho que exista a função fread, e realmente existe! Essa função recebe dois parâmetros.
 * O primeiro é o arquivo que queremos ler. O segundo parâmetro que entra o pulo do gato é onde
 * definimos o tamanho, a quantidade de caracteres, o número de letras que queremos ler. 
 * Na verdade, é o número de bytes que queremos ler, mas para não complicar, eu vou dizer que é
 * o número de caracteres. Então se queremos ler o arquivo todo, aqui eu preciso dizer o tamanho
 * do arquivo, ou seja, o número de caracteres presente nesse arquivo, a quantidade de caracteres
 * que esse arquivo tem. 
 * Dessa forma, vou conseguir ler o arquivo todo. Então vou ter a lista de cursos. Mas como será
 * que pego o número de caracteres do meu arquivo? Como será que conto essa quantidade de letras?
 * Na verdade, qual a quantidade de bytes que tenho no arquivo?
 * Não é flength ou fsize, por exemplo. Na verdade, o nome da função que traz o tamanho de um
 * arquivo é filesize. Eu posso passar o nome do arquivo.
 * 
 *  $arquivo = fopen ('lista-cursos.txt', 'r');
 *  $tamanhoDoArquivo = filesize ('lista-cursos.txt');
 *  $cursos = fread ($arquivo, $tamanhoDoArquivo);
 *  echo $cursos;
 *  fclose($arquivo);   
 * ----------------------------------------------------------------------------------------------
 */


/**
 * vou escrever file_get_contests. Esse é o nome de uma função.
 * A função file_get_contents recebe vários parâmetros, mas o único obrigatório é o nome
 * do arquivo que pode ser, por exemplo, lista-cursos.txt, que é o nosso arquivo. Essa chamada
 * de função vai abrir o arquivo, buscar todo o conteúdo desse arquivo, nos retornar como
 * uma string e fechar esse arquivo. Ou seja, todo aquele trabalho que estávamos tendo,
 * conseguimos alcançar com uma única função.
 * 
 * ABAIXO FACILIDADES PARA ABRIR ARQUIVOS COM PHP
 */

$cursos = file_get_contents ('lista-cursos.txt');
echo $cursos;


/**
 * Mas se eu quiser o arquivo todo onde cada linha é uma linha de um array, é um item de um array,
 * de uma lista?"
 * Pronto, já tem uma função, file! Vamos olhar ela. Em vez de file_get_contents, eu chamo file.
 * Em vez de dar echo, vou chamar um var_dump para poder cuspir o conteúdo dessa variável e
 * mostrar o tipo dela. E aqui posso chamar de novo. Olhe só, tenho um array onde cada linha
 * desse array, cada índice desse array é uma linha do arquivo. Então o PHP traz muitas
 * facilidades para trabalharmos com arquivos, mas nós precisamos entender como trabalharmos
 * com ele sem as facilidades para só então podermos utilizar essas ferramentas. 
 */
#$cursos = file ('lista-cursos.txt');
#var_dump($cursos);


/** -------------------------------------------------------------------------------------------
 *  Nesta aula, aprendemos:
 *         Como manipular arquivos com PHP
 *         Como abrir um arquivo com fopen
 *         Como fechar um arquivo com fclose
 *         Como ler uma linha com fgets ou fread
 *         Como ler todo o conteúdo com file_get_contents ou file  
 */