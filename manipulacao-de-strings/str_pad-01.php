<?php

$saldo = '25.78';

!true && var_export([
    str_pad($saldo, 12, '-', STR_PAD_LEFT),
    str_pad(5454554.54, 12, '-', STR_PAD_LEFT),
]);

$linhas = [
    '01 - Introdução' => '05',
    '02 - Como Faz Xyz' => '15',
    '03 - Xyz e Avx' => '25',
    '04 - Iniciando o Dfg' => '40',
    '05 - Algoritmo Dfg 01' => '40',
    '06 - Algoritmo Dfg 02' => '60',
    '07 - Algoritmo Dfg 03' => '90',
    '08 - Algoritmo Dfg 04' => '110',
    '09 - Alguma coisa bem difcil aqui' => '130',
];
/*
    dkfhdfhjd -------------- 54
    dkfhdfhjd df dfd fd f ---54
    dkfhdfh jd dfd --------- 54
*/

$larguraMaxima = 45;

foreach ($linhas as $capitulo => $pagina) {
    // $tracejado = str_repeat('-', $larguraMaxima);
    // echo "{$capitulo} {$tracejado} {$pagina}" . PHP_EOL;

    $capituloELinhas = mb_str_pad("{$capitulo} ", $larguraMaxima, '-', STR_PAD_RIGHT);
    $capituloELinhas = mb_substr($capituloELinhas, 0, -(strlen($pagina)));
    $linha = "{$capituloELinhas} {$pagina}";

    echo $linha . PHP_EOL;
}

echo PHP_EOL;
