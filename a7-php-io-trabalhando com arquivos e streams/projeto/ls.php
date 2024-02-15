<?php
/*
    Vou chamar esse arquivo de "ls.php" porque é o comando LS que faz isso no Linux. Tudo o
    que precisamos fazer é pegar uma referência para o diretório atual. Como será que eu posso
    pegar uma referência para o diretório atual?
    Existe uma classe no PHP chamada Directory. No construtor dela não existe nenhum parâmetro.
    Então se dermos uma olhada nela, ela nos informa na documentação, tanto utilizando o PhpStorm,
    apertando "Ctrl + Clique" quanto vindo direto na documentação dela, conseguimos ver que as
    instâncias dessa classe são criadas utilizando uma função chamada dir e não através do
    operador new . 
    Parece um pouco estranho, mas é assim que a documentação está dizendo para nós. Vou chamar
    essa função dir e vou passar o diretório atual, que é representado através de um ponto.
    Isso em qualquer sistema operacional, o ponto representa o caminho do diretório atual.
    Com isso, já tenho uma instância de diretório. Então posso simplesmente fazer
    while ($arquivo = $diretorioAtual->read());, ou seja, enquanto consigo ler do diretório
    atual alguma entrada, algum novo arquivo, vou continuar nesse loop. Porque em determinado
    momento ele me vai retornar falso, ele retorna um problema quando não tem mais arquivos
    nesse diretório.
    Além de manipular arquivos o PHP também nos permite manipular diretórios e tudo começa
    na função dir. Eo retorno da função dir é: Um objeto do tipo Directory representando o
    diretório passado por parâmetro.
*/
$diretorioAtual = dir ('.');

echo $diretorioAtual -> path . PHP_EOL;

while ($arquivo = $diretorioAtual -> read()) {
    echo $arquivo . PHP_EOL;
}