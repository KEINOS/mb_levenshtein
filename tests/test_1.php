<?php
include_once('../mb_levenshtein.php');
include_once('./include.php');

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

run_test();
