<?php

$nome = 'João Paulo Maia Nobre';

var_export([
    'se tem "nobre"' => str_ends_with($nome, 'nobre'),
    'se tem "Nobre"' => str_ends_with($nome, 'Nobre'),
    'se tem "E"' => str_ends_with($nome, 'E'),
    'se tem "e"' => str_ends_with($nome, 'e'),
]);

echo PHP_EOL;
