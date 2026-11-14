<?php

$nome = 'joão paulo maia nobre aguiar';

var_export([
    // 'str_split simples' => str_split($nome),
    'mb_str_split simples' => mb_str_split($nome, 1),
]);

echo PHP_EOL;
