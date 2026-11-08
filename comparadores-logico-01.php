<?php

$idade = 15;
// $maiorDeIdade = $idade >= 18;
$menorDeIdade = $idade < 18;
$maiorDeIdade = !$menorDeIdade;

$idade = '18';
$maiorDeIdade = $idade >= '18';

$temExatos18Anos = $idade == 18; // verdadeiro
$temExatos18Anos = $idade === 18; // falso

$isentoDePagarPassagem = $idade < 5 || $idade >= 65;
$sexo = 'M';

$mulherMaiorDeIdade = $sexo === 'F' && $idade >= 18;
$menina = $sexo === 'F' && !$maiorDeIdade;
$menino = $sexo === 'M' && !$maiorDeIdade;
