<?php

// codificam uma url ou texto em um padrao que podemos enviar por meio de uma url

$msg = "Hcode";

echo base64_encode($msg) . "\n";

echo base64_decode("SGNvZGU=");