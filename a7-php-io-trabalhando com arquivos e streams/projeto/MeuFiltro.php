<?php
/**
 * Pois é, não parece muito prático, mas imagine que estamos lendo dados de um arquivo muito
 * grande. Filtrar os dados apenas depois de lê-los se torna inviável, pois precisaríamos ter
 * todo o dado na memória para isso. Os filtros são executados de partes em partes do stream,
 * o que possibilita fazer a modificação gradual, conforme o dado é lido. Isso é muito útil
 * para filtros que descompactam utilizando gzip ao ler, ou compactam ao escrever, transformam
 * o encoding (falaremos mais sobre isso na última aula) conforme acessam o stream, etc. Vale
 * ressaltar que, por ler de partes em partes, podemos nos deparar com uma situação onde uma
 * linha foi lida pela metade na "parte" atual. Nesse caso, podemos informar ao PHP que
 * precisamos de mais dados para continuar retornando PSFS_FEED_ME.
 */


class MeuFiltro extends php_user_filter # código não muito usado, mas importante conhecer..
{
    public $stream;

    public function onCreate () : bool
    {
        $this -> stream = fopen ('php://temp', 'w+');
        return $this -> stream !== false;
    }

    public function filter ($in, $out, &$consumed, $closing) : int
    {
        $saida = '';
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);

            foreach ($linhas as $linha) {
                if (stripos($linha, 'parte') !== false) {
                    $saida .= "$linha\n";
                }
            }
        }

        $bucketSaida = stream_bucket_new ($this->stream, $saida);
        stream_bucket_append ($out, $bucketSaida);

        return PSFS_PASS_ON;
    }
}
