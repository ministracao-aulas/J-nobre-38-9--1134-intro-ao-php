<?php

$cpf = '015.129 .342 - 24';

foreach (count_chars($cpf, 1) as $i => $val) {
    echo "Total de {$val} do caractere '" . chr($i) .'\'' . PHP_EOL;
}
