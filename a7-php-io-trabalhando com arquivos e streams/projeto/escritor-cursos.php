<?php
/**
 * Para escrever um novo arquivo e abri-lo, em inglês, write. Então coloco um w, de “escrita”.
 * 
 * Existem, como, por exemplo: se você quiser ter um arquivo tanto para leitura quanto para
 * escrita, você pode utilizar r+ ou w+ ou a+. "Vinicius, são muitos modos de abertura.
 * Preciso gravar isso tudo?" Claro que não! Honestamente eu não me lembro disso de cabeça sempre.
 * É só você ir à documentação da função fopen. Aqui temos todos os modos de abertura.
 * O r abre para leitura e coloca o ponteiro no início do arquivo. O r+ abre para leitura e
 * escrita e coloca o ponteiro no começo do arquivo. Lembrando que se eu abrir com essas
 * formas e o arquivo não existir, vai acontecer um erro. Agora, se utilizo o w, ele abre para
 * escrita. Se o arquivo não existir, ele vai tentar criar. O w+ abre para leitura e escrita e
 * se não existir, ele vai tentar criar. O a abre somente para a escrita e coloca no final do
 * arquivo. Se o arquivo não existir, ele vai tentar criar. O a+ abre para leitura e escrita,
 * coloca o ponteiro no final do arquivo e se não existir, vai tentar criar. Os modos x somente
 * criam o arquivo, abrem para escrita ou leitura e escrita, mas somente criando um arquivo novo.
 * Ele jamais abre um arquivo que já existe. Esse é o modo de abertura x. Esses vários modos de
 * abertura, primeiramente não foram criamos pelo PHP. São modos de leitura que o sistema
 * operacional já trabalha, a linguagem de programação C trabalha dessa forma. Então o PHP
 * trabalha dessa forma que já é bem conhecida de modo de leitura. Você não precisar ficar
 * gravando, não precisa colocar na sua mente, "O r é para leitura, não cria arquivo; coloca o
 * ponteiro no início do arquivo". Não precisa se preocupar com isso
 * 
 *  $arquivo = fopen ('cursos-php.txt', 'a');
 *  $curso = "\nDesign Patterns PHP II: Boas práticas de programação";
 *  fwrite ($arquivo, $curso);
 *  fclose ($arquivo); 
 * ---------------------------------------------------------------------------------------------
 */

/**
 * Então vamos agora pensar naquele facilitador. Uma forma de escrever arquivos sem me preocupar
 * com abertura e depois fechar o modo de abertura. Esse tipo de coisa. Primeiro vamos pegar de
 * novo o nome do curso de Design Patterns 1, colocar na variável curso e apagar isso tudo.
 * Tudo o que quero é escrever o conteúdo dessa variável no arquivo cursos-php. Então vou apagar
 * isso tudo e salvar. O que eu quero é colocar nesse arquivo o conteúdo,
 * então: file_put_contents. Simples assim! O nome do arquivo? Cursos-php.txt. Os dados que
 * quero adicionar? Curso. Acabou, simples assim! Veja abaixo:
 */

 $curso = "\nDesign Patterns PHP II: Boas práticas de programação";
 file_put_contents ('cursos-php.txt', $curso, FILE_APPEND);
/*
 No último vídeo conferimos que há formas de modificar o comportamento de algumas funções do PHP
 através de parâmetros conhecidos como flags. Uma dessas flags foi usada para informar à função
 file_put_contents que o conteúdo deve ser adicionado ao arquivo ao invés de sobrescrevê-lo.
 FILE_APPEND, para escrever no final de um arquivo
 */



