<?php
include_once('../mb_levenshtein.php');
include_once('./include.php');

$query = 'うこん';
$comps = array(
    'うんこ',
    'ばんこん',
    'さんこん',
    'うにどん',
    'さこん',
);
$expect = 'さこん';

run_test();
