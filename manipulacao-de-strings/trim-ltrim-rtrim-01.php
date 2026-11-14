<?php

$limite = '|';

print_r([
    "trim em '   abc   '" => $limite . trim('   abc   ') . $limite,
    "ltrim em '   abc   '" => $limite . ltrim('   abc   ') . $limite,
    "rtrim em '   abc   '" => $limite . rtrim('   abc   ') . $limite,
    "trim em '
    abc
    '" => $limite . trim('   abc   ') . $limite,
    "ltrim em '
    abc
    '" => $limite . ltrim('   abc   ') . $limite,
    "rtrim em '
    abc
    '" => $limite . rtrim('   abc   ') . $limite,
    "trim de 'X' em 'XYZX'" => $limite . trim('XYZX', 'X') . $limite,
    "trim de 'X' em 'XXXXXX'" => $limite . trim('XXXXXX', 'X') . $limite,
    "ltrim de 'X' em 'XYZX'" => $limite . ltrim('XYZX', 'X') . $limite,
    "rtrim de 'X' em 'XYZX'" => $limite . rtrim('XYZX', 'X') . $limite,
    "trim de 'XZ' em 'XYZX'" => $limite . trim('XYZX', 'ZX') . $limite,
    "trim de 'R$' em 'R$380'" => $limite . trim('R$380', 'R$') . $limite,
    "trim de 'R$' em 'R$ 380'" => $limite . trim('R$ 380', 'R$') . $limite,
    "trim+trim de 'R$' em 'R$ 380'" => $limite . trim(trim('R$ 380', 'R$')) . $limite,
    "trim de 'R$ ' em 'R$ 380'" => $limite . trim('R$ 380', ' $R') . $limite,
    "trim de '$ ' em '$ 380 $'" => $limite . trim('$ 380 $', '$ ') . $limite,
]);
