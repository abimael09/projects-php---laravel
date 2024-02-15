<?php
/**
 * Uma coisa que não vimos até agora em nenhum dos treinamentos é sobre como ler dados do teclado,
 * ou seja, pedir para que o usuário digite alguma coisa durante a execução do programa. Isso,
 * na verdade, com o PHP é bem simples. O que vou fazer é pedir para que o usuário digite no
 * console o nome de um novo curso. E vou adicionar esse novo curso em "cursos.php". Então vou
 * criar um arquivo chamado "console-para-arquivo", é melhor porque vou pegar do console e mandar
 * para o arquivo. Agora o que vou fazer, preciso de um stream de entrada, ou seja, de um stream
 * onde vou ler dados para que depois possa mandar para esse arquivo. E esse stream é do teclado.
 * Como será que pego do teclado? É bem simples, na verdade. Do fopen (filename: ‘php://stdin’)
 * posso pegar utilizando o wrapper do PHP stdin, o standard input, que significa o teclado,
 * basicamente. Eu vou pegar como modo de leitura, obviamente. Uma dica que também não fica
 * clara na documentação é que independentemente do modo que você passe aqui, se você estiver
 * abrindo o stdin, sempre vai ser modo leitura.
 * 
 * Agora já sabemos como ler da entrada padrão (stdin, ou, teclado rsrs) utilizando PHP.
 */
$novoCurso = trim (fgets (STDIN));

file_put_contents ('cursos-php.txt', "\n$novoCurso", FILE_APPEND);