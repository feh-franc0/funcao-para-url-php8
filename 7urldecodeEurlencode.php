<?php

// duas funcoes de encode de url, mas agora mais moderna

$msg = "João Rangel+";

echo urlencode($msg)."\n";

echo urldecode("Jo%C3%A3o+Rangel%2B");