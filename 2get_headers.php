<?php

// conseguimos obter os headers de um acesso http que podemos fazer

$link = "https://hcode.com.br";

print_r(get_headers($link, 0));
// print_r(get_headers($link, 1)); //o nome vem na chave