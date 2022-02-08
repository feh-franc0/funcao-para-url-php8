<?php

// conseguimos obter as metas tags de um site qualquer html da internet, ai conseguimos extrair algumas informações do cabeçalho , nao da solicitação http mas do arquivo html desse site e ai fazer algun crawler ou alguma coisa q vc queira

$link = "https://hcode.com.br";

print_r(get_meta_tags($link));