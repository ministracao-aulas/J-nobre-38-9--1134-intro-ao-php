<?php

$words = [
    'sal',
    'salsicha',
    'salada',
    'salário',
    'salgado',
    'universal',
    'universo',
    'boca',
    'borracha',
    'unilateral',
    'broca',
    'rodoviária',
    'povo',
    'o',
    'O',
];

function similarWordsFilter(
    string $toSearch,
    array $words,
    int|float $min = 0,
    bool $caseSensitive = false,
): array
{
    $words = array_filter(array_values($words), 'is_string');

    $toSearch = $caseSensitive ? $toSearch : strtoupper($toSearch);

    foreach ($words as $index => $word) {
        $key = $word;
        $word = $caseSensitive ? $word : strtoupper($word);
        unset($words[$index]);
        similar_text($toSearch, $word, $percent);

        if ($percent <= $min) {
            continue;
        }

        $words[$key] = $percent;
    }

    arsort($words);

    return $words;
}

var_export([
    // 'similarWordsFilter sal' => similarWordsFilter('sal', $words),
    // 'similarWordsFilter sal -1' => similarWordsFilter('sal', $words, -1),
    // 'similarWordsFilter salmora' => similarWordsFilter('salmora', $words),
    // 'similarWordsFilter salada' => similarWordsFilter('salada', $words),
    // 'similarWordsFilter ovo' => similarWordsFilter('ovo', $words),
    // 'similarWordsFilter ovo min 20' => similarWordsFilter('ovo', $words, 20),
    'similarWordsFilter ovo min 25' => similarWordsFilter('ovo', $words, 25),
    'similarWordsFilter Ovo min 25, false' => similarWordsFilter('Ovo', $words, 25, false),
    'similarWordsFilter Ovo min 25, true' => similarWordsFilter('Ovo', $words, 25, true),
    'similarWordsFilter o min 25, false' => similarWordsFilter('o', $words, 25, false),
    'similarWordsFilter o min 25, true' => similarWordsFilter('o', $words, 25, true),
    // 'similarWordsFilter roda min 25' => similarWordsFilter('roda', $words, 25),
    // 'similarWordsFilter roda min 35' => similarWordsFilter('roda', $words, 35),
]);

echo PHP_EOL;
