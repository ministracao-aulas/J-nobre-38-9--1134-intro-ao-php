<?php

$nome1 = 'JOÃO PAULO MAIA';
$nome2 = 'joão paulo maia';
$nome3 = 'JOÃO PAULO MAIA';

print_r([
    'lcfirst' => lcfirst($nome1),
    'ucfirst' => ucfirst($nome2),
    'ucwords' => ucwords($nome2),
    'ucwords 2' => ucwords($nome3),
    'ucwords 3' => ucwords(strtolower($nome3)), // JoÃo Paulo Maia
    'ucwords 4' => ucwords(mb_strtolower($nome3)), // João Paulo Maia
]);
