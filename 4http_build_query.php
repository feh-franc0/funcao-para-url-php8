<?php

// como converter uma url para formato de string 

var_dump($_GET);

$fields = [
    "0" => "Fernando Franco",
    "sobrenome" => "Rangel"
];

//echo '<a href="?'.http_build_query($fields).'">Link</a>';


// temos alguns parametros ($fields, prefixo Para Caso Seja Numerico, Muda o Delimitador Padrao é &, Converte o espaço que por padrao é +  msa podemos por na forma antiga de %20 nao vale a pena essa troca padrao do + é PHP_QUERY_RFC1738)
echo http_build_query($fields, '_', " AND ", PHP_QUERY_RFC3986);

