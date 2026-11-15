<?php
/*
Diferença entre 'printf' e 'sprintf':
printf: mostra a saída (stdout/console/terminal) o texto formatado
sprintf: retorna o texto formatado (para uso posterior)
*/

$nome = 'João';
$email = 'jp@paulonobre.com';

$mensagem = 'Olá %s, seja bem vindo. Preciso que confirme seu e-mail %s';

// $textoFormatado = sprintf($mensagem, $nome); // erro de número de argumentos/parâmetros esperados

$textoFormatado = sprintf('Olá Fulano' . PHP_EOL, 'valor1', 'valor2'); // Como não há placehoders, valor1 e valor2 não são partes dasaída
echo $textoFormatado . PHP_EOL;

sprintf('Algo aqui'); // foi formatado mas não foi usado
echo sprintf('Teste 1, 2, 3'); // foi usado diretamente para uma saída mas sem armazenar
echo PHP_EOL;

$total = $textoFormatado = sprintf($mensagem, $nome, $email); // 77 devido aos 2 caracteres especiais que ocupam mais 2 bytes
echo $total . PHP_EOL;

$textoFormatado = sprintf('Total: %d', $total);
echo $textoFormatado . PHP_EOL;

$peso = 120.3575000;
$textoFormatado = sprintf('Peso: %01.2f', $peso);
echo $textoFormatado . PHP_EOL;

$preco = 1257.147;
$textoFormatado = sprintf('Preço: R$ %01.2f', $preco);
echo $textoFormatado . PHP_EOL;

$desconto = 11.45;
$textoFormatado = sprintf('Desconto: %01.2f%%', $desconto); // Escapando o '%'
echo $textoFormatado . PHP_EOL;

var_export([
    'textoFormatado' => $textoFormatado,
]);

echo PHP_EOL;
