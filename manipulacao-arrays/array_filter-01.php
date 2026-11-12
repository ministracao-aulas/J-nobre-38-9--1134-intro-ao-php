<?php

$nomes = [
    'Maria',
    'Pedro',
    'João',
    'Simão',
    'TIAGO',
    'JÚLIO',
    'ANDRESA',
    'ANDRÉ',
    'LUKA',
];

$nomesQueComecamEmA = array_filter($nomes, function ($nome) {
    return strtolower($nome[0]) === 'a';
});

// length joao   // 4 -1

$nomesQueTerminamEmA = array_filter($nomes, function ($nome) {
    return strtolower($nome[strlen($nome) -1]) === 'a';
});

echo var_export($nomesQueComecamEmA, true) . PHP_EOL;
echo var_export($nomesQueTerminamEmA, true) . PHP_EOL;
