<?php

$nome = 'João Paulo Maia Nobre';

var_export([
    'se tem "nobre"' => str_contains($nome, 'nobre'),
    'se tem "Nobre"' => str_contains($nome, 'Nobre'),
    'se tem "n"' => str_contains($nome, 'n'),
    'se tem "N"' => str_contains($nome, 'N'),
    'se tem "ã"' => str_contains($nome, 'ã'),
]);

echo PHP_EOL;
