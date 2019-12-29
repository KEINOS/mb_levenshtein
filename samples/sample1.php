<?php
include_once('../mb_levenshtein.php');

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

echo '検索語: ' . $query . PHP_EOL;
if (!isset($result)) {
    echo '見つかりませんでした' . PHP_EOL;
} elseif ($result['sim'] === 1.0) {
    echo '見つかりました' . PHP_EOL;
} else {
    echo 'もしかして: ' . $result['word'] . PHP_EOL;
}

// Result:
//   検索語: ほあようごぁいまーしゅ
//   もしかして: おはようございまーす
