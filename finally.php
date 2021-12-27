<?php

$arquivo = fopen('temp.txt', 'w');

try {
    fwrite($arquivo, 'Qualquer coisa');
} catch (\Throwable $exception) {
    echo "Erro ao escrever no arquivo" . PHP_EOL;
}finally {
    fclose($arquivo);
}

?>
