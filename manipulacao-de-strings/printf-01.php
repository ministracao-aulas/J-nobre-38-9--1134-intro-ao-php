<?php
/*
Diferença entre 'printf' e 'sprintf':
printf: mostra a saída (stdout/console/terminal) o texto formatado
sprintf: retorna o texto formatado (para uso posterior)
*/


$nome = 'João';
$email = 'jp@paulonobre.com';

$mensagem = 'Olá %s, seja bem vindo. Preciso que confirme seu e-mail %s';
// printf($mensagem, $nome); // erro de número de argumentos/parâmetros esperados

printf('Olá Fulano' . PHP_EOL, 'valor1', 'valor2'); // Como não há placehoders, valor1 e valor2 não são partes dasaída

$total = printf($mensagem, $nome, $email); // 77 devido aos 2 caracteres especiais que ocupam mais 2 bytes

echo PHP_EOL;
printf('Total: %d', $total);

echo PHP_EOL;
$peso = 120.3575000;
printf('Peso: %01.2f', $peso);

echo PHP_EOL;
$preco = 1257.147;
printf('Preço: R$ %01.2f', $preco);

echo PHP_EOL;
$desconto = 11.45;
printf('Desconto: %01.2f%%', $desconto); // Escapando o '%'

echo PHP_EOL;
