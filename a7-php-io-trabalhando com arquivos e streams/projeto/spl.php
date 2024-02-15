<?php
/**
 * Será que conseguimos trabalhar com objeto também? Claro que conseguimos! Então vou criar um
 * arquivo e vou chamar ele de "spl". Vou explicar melhor o que essa sigla quer dizer.
 * Eu vou criar um arquivo. Esse arquivo vai ser o nosso arquivo de "cursos-csv". Vou chamar de
 * $arquivoCursos. Já escrevi em CSV, então vou ler em CSV.
 * Mas não vou mais utilizar o fopen. Vou agora criar um novo new SplFileObject(), ou seja,
 * um objeto de arquivo. O nome desse arquivo é (filename: 'cursos-csv', open_mode: 'r');.
 * Eu abri ele para leitura. Inclusive, esse modo de leitura já é o padrão. Se eu não informar
 * nada, já abro ele como leitura. Já o padrão, já é o que vem definido.
 * Eu quero que enquanto eu não atingir o final desse arquivo vou ler uma linha em CSV,
 * então: while ($arquivoCursos->feof()) { $linha = $arquivoCursos->fgetcsv();. Vou ler essa linha
 * sendo que o delimitador, como escrevemos lá, é o ponto e vírgula. Nessa linha eu vou exibir
 * só o primeiro item, que é o curso, sem exibir sim ou não.
 * 
 * Até aqui manipulamos arquivos (ou streams como um todo) utilizando funções. Mas agora vimos
 * a classe que podemos utilizar para representar um arquivo: SplFileObject .
 */
$arquivoCursos = new SplFileObject ('cursos.csv');

while (!$arquivoCursos -> eof ()) {
    $linha = $arquivoCursos -> fgetcsv (';');
    echo utf8_encode($linha [0]) . PHP_EOL; # função utf8_encode FOI DESCONTINUADA!
}

$date = new DateTime ();
$date -> setTimestamp ($arquivoCursos -> getCTime ());

echo 'Data Atual: '. $date -> format ('d/m/y');

/*
 Nesta aula, aprendemos:

    Como trabalhar com arquivos no formato CSV, utilizando as funções fputcsv e fgetcsv
    Como ter acesso aos dados de diretórios, através da função dir, que nos retorna uma instância
    de Directory
    Como tratar streams como objetos, através da classe SplFileObject
    SPL significa Standard PHP Library, que é uma coleção de classes interfaces criadas
    com o propósito de resolver problemas comuns
    
*/
