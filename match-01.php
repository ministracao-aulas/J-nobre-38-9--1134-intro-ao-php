<?php

$fruta = 'maçã';
// $fruta = 'limão';
$fruta = 'pêra';

/* *
switch (strtolower($fruta)) {
    case 'maçã':
    case 'banana':
    case 'melancia':
        echo 'é doce!';
        break;

    case 'limão':
    case 'kiwi':
    case 'laranja':
        echo 'é azedo!';
        break;

    default:
        echo 'nunca comi';
        break;
}
/**/

echo match(strtolower($fruta)) {
    'maçã',
    'banana',
    'melancia' => 'é doce!',
    'limão',
    'kiwi',
    'laranja' => 'é azedo!',
    default => 'nunca comi',
};

echo str_repeat(PHP_EOL, 4);
