<?php
include_once('../mb_levenshtein.php');
include_once('./include.php');

$query = '東西南北';
$comps = array(
    '東南西北',
    '東西線',
    '南北戦争',
    '東へ西へ',
);
$expect = '東南西北';

run_test();
