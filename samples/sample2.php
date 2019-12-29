<?php
/**
 * Sample to list distance.
 */

include_once('../mb_levenshtein.php');

$query = 'cafe';
$comps = [
    'coffee',
    'café',
    'tea',
    'sake',
];

echo "Query word: ${query}" . PHP_EOL;

foreach ($comps as $comp) {
    $sim = mb_levenshtein($query, $comp);
    echo "  ${comp}: ${sim}" . PHP_EOL;
}
