<?php
/*
    E agora o que eu quero fazer é pegar todos esses cursos que estão no arquivo "lista-cursos.txt"
    que foram gravados por mim e depois todos os cursos dessa lista "cursos-php.txt" que não foram
    gravados por mim e salvar em um terceiro arquivo.
    [00:19] Um arquivo em CSV que vai ter só duas colunas. Uma, o nome do curso e na outra
    coluna "sim" ou "não". Sim, se o curso tiver sido gravado por mim e não se não tiver sido.
    Só isso. Então vamos criar "arquivos-para-csv", porque vou ler esses dois arquivos e salvar
    em um CSV.
    Primeiro, $meusCursos = file_get_contents(filename:'lista-cursos.txt');.
    Tem também $outrosCursos = file_get_contents(filename:'cursos-php.txt');. Peguei o conteúdo
    desses dois cursos. Só que agora, na verdade, não quero pegar como string, quero pegar como
    array, porque cada um dos cursos quero ver se foi eu ou não e salvar como CSV.
    Então já vimos como pegar cada linha com o índice do array que é com a função file.
    Agora o que eu quero é criar um arquivo CSV,
    $arquivoCsv = fopen(filename: 'cursos.csv', mode: 'w'). Eu vou escrever nesse arquivo.
    Nele, para cada um dos meus cursos, foreach ($meusCursos as $curso).
    Vou definir que nessa linha vai ter o dado do curso e
    a palavra Sim’: ‘$linha = [$curso, 'Sim'];. Ou seja, são as duas colunas da minha linha em CSV.
    Lembrando que caso você não esteja familiarizado com o formato CSV, é um formato de arquivo
    onde você tem, 'Colune1, Coluna2, Coluna3'. 
    É fácil escrever um conteúdo em um arquivo utilizando o formato CSV, através da função fputcsv.
    Além do arquivo aberto, temos que passar por parâmetro a função arrar, onde cada item
    será uma "coluna" no arquico. Ex: [1,2].
*/
$meusCursos = file ('lista-cursos.txt');
$outrosCursos = file ('cursos-php.txt');

$arquivoCsv = fopen ('cursos.csv', 'w');
/*
  Onde criamos o nosso arquivo CSV, o que preciso fazer é pegar essa string que está dentro
  de "curso", tirar ela da tabela UTF-8 e converter para a tabela que o Excel entende.
  O problema é que normalmente essa conversão é um pouco mais complexa porque eu preciso saber de
  qual tabela estou tirando, no caso é a UTF-8, e para qual tabela vou transformar.

  No caso do Excel eu posso estar enganado, mas acredito que seja a Windows 1252. Só que posso
  digitar esse número errado ou me esquecer, ter que buscar na internet. Então isso pode ser uma
  tarefa complexa, só que o PHP novamente pensando na facilidade tem uma função bem tranquila
  chamada utf8_decode.
  Tudo o que essa função faz é tirar uma string da tabela do UTF-8 e colocar em
  uma tabela ISO8859-1. Essa tabela é suficientemente parecida com a tabela utilizada pelo Excel.
  Tão parecida que vai ser suficiente para que o Excel entenda todas aquelas acentuações do nosso
  alfabeto brasileiro.
  Com isso, eu posso simplesmente adicionar (utf-8_decode($curso)) nos dois momentos que estou
  escrevendo aquela string que está em utf-8. Se eu executar esse arquivo de novo, ele vai criar.
*/
foreach ($meusCursos as $curso)
{
    $linha = [trim(utf8_decode($curso)), 'Sim']; # função utf8_decode FOI DESCONTINUADA!
    fputcsv ($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso)
{
    $linha = [trim(utf8_decode($curso)), 'Não']; # função utf8_decode FOI DESCONTINUADA!
    fputcsv ($arquivoCsv, $linha, ';');
}

fclose ($arquivoCsv);