<?php

$nome = 'João';

$replace_pairs = [
    'Ã' => 'A',
    'ã' => 'a',
];

$total = 0;
$total = 1;
$total = 10;

!true && var_export([
    'strtr' => strtr($nome, ['ã' => 'a']),
    'strtr_locale_01' => strtr(
        'Olá %nome%, seja bem vindo ao %nome_do_sistema%',
        [
            '%nome%' => 'João',
            '%nome_do_sistema%' => 'OS Plus',
        ]
    ),
    'strtr_locale_02' => strtr(
        'Foram encontrados #num01 @pluralize@',
        [
            '#num01' => $total,
            '@pluralize@' => $total == 1 ? 'item' : 'itens',
        ]
    ),
]);

$headContent = file_get_contents(__DIR__ . '/demo-head.htpl');

$loadComponent = function(string $abcBolinha, array $vars = []) {
    $content = file_get_contents($abcBolinha);

    $newVars = [];
    foreach ($vars as $key => $value) {
        $newKey = "##{$key}##";
        unset($vars[$newKey]);
        $newVars[$newKey] = $value;
    }

    return strtr($content, $newVars);
};

$usuario = [
    'nome' => 'João Paulo',
    'preferences' => [
        'theme' => 'dark',
        'theme' => 'light',
        'theme' => null,
    ]
];

$theme = $usuario['preferences']['theme'] ?? 'light';
$themeDark = $theme === 'dark';

$headVars = [
    'novo_link_css' => $themeDark ? 'dark.css' : 'light.css',
];
$html = <<<HTML
<!DOCTYPE html>
<html>

{$loadComponent(__DIR__ . '/demo-head.htpl', $headVars)}

<body>
    <h1>{{message}}</h1>
    <div>
        <p>Olá {{user_name}}, seja bem vindo!</p>
    </div>
    <footer>
        <p>Logado como '{{user_name}}'</p>
    </footer>
</body>

</html>
HTML;

$trVars = [
    '{{css_style_path}}' => 'assets/css/style',
    '{{title}}' => 'Título da minha página',
    '{{message}}' => 'Olá mundo',
    '{{user_name}}' => 'João',
];

echo strtr($html, $trVars);
echo PHP_EOL;
