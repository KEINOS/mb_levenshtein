<?php

function echo_verbose($msg, $verbose)
{
    if($verbose){
        echo $msg . PHP_EOL;
    }
}

function run_test($verbose=false)
{
    global $query, $comps, $expect;

    $flag_failure=false;

    // Test: mb_levenshtein_ratio
    echo_verbose('- Testing: mb_levenshtein_ratio', $verbose);
    unset($result);
    foreach ($comps as $comp) {
        $sim = mb_levenshtein_ratio($query, $comp);
        echo_verbose("${query}:${comp}=${sim}", $verbose);
        if (! isset($result) || $sim > $result['sim']) {
            $result['sim']  = $sim;
            $result['word'] = $comp;
            if ($result['sim'] === 1.0) {
                break;
            }
        }
    }
    echo_verbose('Result: ' . print_r($result, true), $verbose);
    if ($expect !== $result['word']) {
        $flag_failure = true;
    }

    // Test: mb_levenshtein
    echo_verbose('- Testing: mb_levenshtein', $verbose);
    unset($result);
    foreach ($comps as $comp) {
        $sim = mb_levenshtein($query, $comp);
        echo_verbose("${query}:${comp}=${sim}", $verbose);
        if (! isset($result) || $sim < $result['sim']) {
            $result['sim']  = $sim;
            $result['word'] = $comp;
        }
    }
    echo_verbose('Result: ' . print_r($result, true), $verbose);
    if ($expect !== $result['word']) {
        $flag_failure = true;
    }

    if($flag_failure){
        exit(1);
    }

    exit(0);
}
