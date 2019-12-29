[![Build Status](https://travis-ci.org/KEINOS/mb_levenshtein.svg?branch=master)](https://travis-ci.org/KEINOS/mb_levenshtein)
[![](https://img.shields.io/packagist/php-v/keinos/mb_levenshtein)](https://packagist.org/packages/keinos/mb_levenshtein "Supported PHP Version")
[![](https://img.shields.io/packagist/l/keinos/mb_levenshtein)](https://github.com/KEINOS/mb_levenshtein/blob/master/LICENSE)

# mb_levenshtein PHP function

Levenshtein PHP function with UTF-8 support. This function finds similarity distance between two strings.

- [Source Code](https://github.com/KEINOS/mb_levenshtein) @ GitHub

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

## Composer

- To use released version:

    ```bash
    composer require keinos/mb_levenshtein
    ```

- To use latest version:

    ```bash
    composer require keinos/mb_levenshtein:dev-master
    ```

```php
<?php
require_once('vendor/autoload.php');

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
$ ls
sample.php
$ composer require keinos/mb_levenshtein
...
$ php ./sample.php
Query word: cafe
  coffee: 3
  café: 1
  tea: 4
  sake: 2
$ ls
composer.json	composer.lock	sample1.php	vendor
```
