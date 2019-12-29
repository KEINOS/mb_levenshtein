<?php
/**
 * Sample script using composer.
 *
 * You need to run the below command before running this script in order to
 * fetch the "mb_levenshtein" script via composer.
 *
 *   $ composer require keinos/mb_levenshtein
 */
require_once('vendor/autoload.php');

$query = 'ほあようごぁいまーしゅ';
$comps = [
    'こんにちはー',
    'おはようございまーす',
    'こんばんはー',
    'おやすみなさーい',
    'いただきまーす',
    'おつかれさまー',
    'ぬぁあああんつかれたもぉぉぉぉぉぉん',
];

echo "Query word: ${query}" . PHP_EOL;

foreach ($comps as $comp) {
    $sim = mb_levenshtein_ratio($query, $comp);
    echo "  ${comp}: ${sim}" . PHP_EOL;
}

// Result
//
// Query word: ほあようごぁいまーしゅ
//   こんにちはー: 0.090909090909091
//   おはようございまーす: 0.54545454545455
//   こんばんはー: 0.090909090909091
//   おやすみなさーい: 0.090909090909091
//   いただきまーす: 0.18181818181818
//   おつかれさまー: 0.18181818181818
//   ぬぁあああんつかれたもぉぉぉぉぉぉん: 0.055555555555556
