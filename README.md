[![Build Status](https://travis-ci.org/KEINOS/mb_levenshtein.svg?branch=master)](https://travis-ci.org/KEINOS/mb_levenshtein)

# mb_levenshtein function

Levenshtein PHP function with UTF-8 support. This function finds similarity distance between two strings.

## Usage

```php
<?php
include_once('./mb_levenshtein.php');

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
```

Results:

```shellsession
$ php ./sample.php
Query word: cafe
  coffee: 3
  café: 1
  tea: 4
  sake: 2
```
