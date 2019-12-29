#!/bin/bash
# =============================================================================
#  Test Script to check basic function.
# =============================================================================

cd $(cd $(dirname $0); pwd)

# -----------------------------------------------------------------------------
#  Check Basic requirements
# -----------------------------------------------------------------------------
echo '================================'
echo ' Env checks before testing'
echo '================================'

echo '- Checking: php ...'
which php > /dev/null 2>&1 || {
    echo '- ERROR: PHP not found.'
    exit 1
}
echo -n 'php installed: '
php --version

# -----------------------------------------------------------------------------
#  PHP Lint check: mb_levenshtein.php
# -----------------------------------------------------------------------------
echo '- Lint Check: mb_levenshtein.php ...'
php -l ../mb_levenshtein.php

# -----------------------------------------------------------------------------
#  Run tests
# -----------------------------------------------------------------------------
echo '================================'
echo ' Running tests'
echo '================================'

RESULT=0

for path_file in $(ls test_*.php); do
    echo -n "- TESTING: ${path_file} ... "

    php $path_file 1>/dev/null 2>/dev/null

    [ $? -eq 0 ] && {
        echo 'OK'
        continue
    }

    echo 'NG'
    RESULT=1

done

exit $RESULT
