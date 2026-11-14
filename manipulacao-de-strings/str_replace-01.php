<?php

$nome = 'João Paulo Maia Nobre';

// $novoNome = str_replace('Maia', 'Nobre', $nome);
// $novoNome = str_replace('Maia', 'Maia Nobre', $nome);
// $novoNome = str_replace('Maia', '', $nome);

// $novoNome = str_replace(['Maia','Nobre'], '', $nome);
$novoNome = str_replace('João Paulo', 'JP', $nome);

print_r($novoNome);
