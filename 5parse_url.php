<?php

// parse = interpretador, analisa cada um dos componentes e entende o que esse componente signica 

$url = "https://joao:123456@hcode.com.br:5000/blog?extra=abc#home";

print_r(parse_url($url));
// print_r(parse_url($url, PHP_URL_HOST));