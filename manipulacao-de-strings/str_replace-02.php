<?php

$cpf = '015.129 .342 - 24';
$novaString = str_replace(['.', '-', ' '], '', $cpf);

print_r($novaString);
