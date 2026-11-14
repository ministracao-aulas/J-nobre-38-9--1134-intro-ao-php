<?php

$nome = 'João Paulo Maia Nobre Aguiar';
// $nome = 'Antônio Maia Nobre Aguiar';
// $nome = 'Joao Paulo Maia Nobre Aguiar';
// $nome = 'Tiago França';

// $primeiroNome = explode(' ', $nome, 2)[0] ?? $nome;
$primeiroEspaco = mb_strpos($nome, ' ');
$primeiroNome = mb_substr($nome, 0, $primeiroEspaco);

$iniciais = array_reduce(explode(' ', $nome), function ($acumulador, $valor) {
    return $acumulador . mb_substr($valor, 0, 1);
}, '');

$iniciaisSimples = mb_substr($iniciais, 0, 1) . mb_substr($iniciais, -1);

// $iniciais = array_reduce(explode(' ', $nome), function ($atual, $valor) {
//     $valor = mb_substr($valor, 0, 1);
//     return $atual ? "{$atual}{$valor}" : $valor;
// }, '');

print_r([
    // 'substr 0' => substr($nome, 0),
    // 'substr 0 4' => '|'. substr($nome, 0, 4) . '|', // Joã
    // 'mb_substr 0 4' => '|'. mb_substr($nome, 0, 4) . '|', // João
    // 'mb_substr 0 4 UTF-8' => '|'. mb_substr($nome, 0, 4, 'UTF-8') . '|', // João
    // 'substr 2' => mb_substr($nome, 2, 4),
    // 'substr 2 4' => mb_substr($nome, 2, 4),
    // 'substr -6' => '|' .  mb_substr($nome, -6) . '|',
    // 'substr -6 1' => '|' .  mb_substr($nome, -6, 1) . '|',
    // 'substr 5' => mb_substr($nome, 5),
    'substr 4' => '|'. mb_substr($nome, 0, 4) . '|', // 'João'
    'substr 5' => '|'. mb_substr($nome, 0, 5) . '|', // 'João '
    // 'primeiroNome' => $primeiroNome,
    // 'iniciais' => $iniciais,
    // 'iniciaisSimples' => $iniciaisSimples,
]);

echo PHP_EOL;
