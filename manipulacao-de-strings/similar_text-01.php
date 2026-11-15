<?php
$var_1 = strtoupper("Doggy");
$var_2 = strtoupper("dog");

similar_text($var_1, $var_2, $percent);

var_export([
    'percent' => $percent,
]);

echo PHP_EOL;
