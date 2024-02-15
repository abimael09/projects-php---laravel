<?php
/**
 * Nesta aula, aprendemos:
 *     Como ler dados do teclado ao utilizar o stream STDIN
 *     Vimos que as constantes STDIN, STDOUT e STDERR nos ajudam com a manipulação de streams
 *     do sistema.
 *     Como escrever na tela como se o console fosse um arquivo, utilizando o STDOUT e STDERR
 *     Como copiar dados diretamente de um stream para outro, com stream_copy_to_stream,
 *     poupando memória
 */

$cursos = fopen ('zip://arquivo.zip#cursos-php.txt', 'r');
stream_copy_to_stream ($cursos, STDOUT);
