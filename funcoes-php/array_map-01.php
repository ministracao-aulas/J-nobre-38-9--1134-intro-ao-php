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

$apenasAUltimaLetraMaiuscula = array_map(function ($nome) {
    $nome = trim(strtolower($nome));
    $indiceLetra = strlen($nome) -1; // Última letra
    // $indiceLetra = 0; // Primeira letra
    $nome[$indiceLetra] = strtoupper($nome[$indiceLetra]);

    return $nome;
}, $nomes);

echo var_export($apenasAUltimaLetraMaiuscula, true) . PHP_EOL;
