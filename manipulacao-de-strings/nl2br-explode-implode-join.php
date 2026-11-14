<?php

$meuTexto = "Olá João!

Venho aqui te chamar para jogar futebol no campo do bairro.
O endereço segue abaixo:
Rua Adamantita, 45, Centro
";

// echo $meuTexto; // Mostra no terminal, mas não no navegador
// echo nl2br($meuTexto);

// Forma mais longa, alternativa ao nl2br
// echo array_reduce(
//     explode("\n", $meuTexto),
//     function ($atual, $linha) {
//         return $atual . "{$linha}<br>\n";
//     }, ''
// );

$nome = 'João Paulo Maia';
$nomeArray = ['João','Paulo','Maia'];

print_r([
    // "explode('joao', \$nome)" => explode('joao', $nome),
    // "explode('joão', \$nome)" => explode('joão', $nome),
    // "explode('João', \$nome)" => explode('João', $nome),
    // "explode('o', \$nome)" => explode('o', $nome),
    // "explode('o', \$nome, 2)" => explode('o', $nome, 2),
    // "explode('o', \$nome, 3)" => explode('o', $nome, 3),

    // "implode('', \$nomeArray)" => implode('', $nomeArray),
    // "implode(' ', \$nomeArray)" => implode(' ', $nomeArray),
    // "implode('-', \$nomeArray)" => implode('-', $nomeArray),
    // "implode('==', \$nomeArray)" => implode('==', $nomeArray),

    // "join('', \$nomeArray)" => join('', $nomeArray),
    // "join(' ', \$nomeArray)" => join(' ', $nomeArray),
    // "join('-', \$nomeArray)" => join('-', $nomeArray),
    // "join('==', \$nomeArray)" => join('==', $nomeArray),
]);
