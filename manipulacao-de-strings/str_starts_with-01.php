<?php

$nome = 'João Paulo Maia Nobre';

var_export([
    'se tem "joao"' => str_starts_with($nome, 'joao'),
    'se tem "Joao"' => str_starts_with($nome, 'Joao'),
    'se tem "joão"' => str_starts_with($nome, 'joão'),
    'se tem "João"' => str_starts_with($nome, 'João'),
    'se tem "j"' => str_starts_with($nome, 'j'),
    'se tem "J"' => str_starts_with($nome, 'J'),
    'se tem "Jo"' => str_starts_with($nome, 'Jo'),
]);

echo PHP_EOL;
