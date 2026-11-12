<?php

$contasAPAgar = [
    150.50,
    200.14,
    15.00,
    18.00,
];

$totalAPagar = array_reduce($contasAPAgar, function ($atual, $valor) {
    return $atual + $valor;
}, 0);

$concatenandoValores = array_reduce($contasAPAgar, function ($atual, $valor) {
    return $atual ? "{$atual}; {$valor}" : $valor;
}, '');

$mergeDeArray = array_reduce($contasAPAgar, function ($atual, $valor) {
    return array_merge($atual, [$valor]);
}, []);

echo var_export($totalAPagar, true) . PHP_EOL . PHP_EOL. PHP_EOL;
