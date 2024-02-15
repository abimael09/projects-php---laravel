<?php
/**
 * Os contextos são criados utilizando essa função stream_context_create ou as opções podem ser
 * setadas depois utilizando essa função stream_context_set_option.
 * A primeira coisa que vamos fazer é criar um novo arquivo "httpbin". Eu Vou criar uma
 * requisição e já vou exibir o que foi recebido da resposta dessa requisição. Então vou
 * executar um echo file_get_contents(filename: 'http://httpbin.org/get');.
 *  Olhe só, executei. Não enviei nenhum cabeçalho a mais. Só o host que é padrão, todas as
 * requisições têm. Não mandei nenhum argumento, não mandei nada no corpo. Então foi uma
 * requisição get normal sem nenhum parâmetro a mais. Agora, como podemos fazer? Como podemos
 * implementar e adicionar esse contexto?
 * Se você reparar, nós temos um parâmetro que é se vai utilizar ou não o include_path, se
 * vai tentar buscar esse arquivo http://httpbin.org/get dentro do include_path do PHP.
 * Por padrão, esse parâmetro é falso. O próximo parâmetro é o contexto. Então, aqui posso
 * passar o meu contexto. Com isso, eu vou criar o $contexto = stream_context_create().
 * Estamos vendo que é possível adicionar o que é chamado de contexto à manipulação dos streams.
 * Com isso conseguimos informar qual o verbo HTTP utilizado em uma requisição,
 * informar cabeçalhos, o conteúdo, etc.
 * Enfim, com contextos eu consigo passar informações a mais para o stream, para o dado que
 * vai ler lido ou para o dado que vai ser enviado. Isso é muito interessante! 
 */
$contexto = stream_context_create ([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: text/plain",
        'content' => 'Teste do corpo',
    ]
]);

echo file_get_contents ('http://httpbin.org/post', false, $contexto);