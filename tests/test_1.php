<?php
include_once('../mb_levenshtein.php');

$query = 'ほあようごぁいまーしゅ';
$comps = array(
    'こんにちはー',
    'おはようございまーす',
    'こんばんはー',
    'おやすみなさーい',
    'いただきまーす',
    'おつかれさまー',
    'ぬぁあああんつかれたもぉぉぉぉぉぉん',
);
$expect = 'おはようございまーす';

foreach ($comps as $comp) {
    $sim = mb_levenshtein_ratio($query, $comp);
    if ($sim > 0.5 and !isset($result) || $sim > $result['sim']) {
        $result['sim']  = $sim;
        $result['word'] = $comp;
        if ($result['sim'] === 1.0) {
            break;
        }
    }
}

if ($expect !== $result['word']) {
    exit(1); // failure
}

exit(0); // success
