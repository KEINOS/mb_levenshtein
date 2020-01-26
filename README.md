[![Build Status](https://travis-ci.org/KEINOS/mb_levenshtein.svg?branch=master)](https://travis-ci.org/KEINOS/mb_levenshtein)
[![](https://img.shields.io/packagist/php-v/keinos/mb_levenshtein)](https://travis-ci.org/KEINOS/mb_levenshtein "Supported PHP Version")
[![](https://img.shields.io/packagist/l/keinos/mb_levenshtein)](https://github.com/KEINOS/mb_levenshtein/blob/master/LICENSE)

# mb_levenshtein PHP function

Levenshtein PHP function with UTF-8 support. This function finds similarity distance between two strings.

- [Source Code](https://github.com/KEINOS/mb_levenshtein) @ GitHub
- [Composer available](https://packagist.org/packages/keinos/mb_levenshtein) @ Packagist

## Functions

- Returns in Levenshtein Distance. (The smaller, the closer)

    ```php
    mb_levenshtein ( string $str1 , string $str2 ) : int
    ```

    ```php
    mb_levenshtein ( string $str1 , string $str2 , int $cost_ins , int $cost_rep , int $cost_del ) : int
    ```

- Returns in Levenshtein Ratio between 0 to 1. (The bigger, the closer)

    ```php
    mb_levenshtein_ratio ( string $str1 , string $str2 ) : float
    ```

    ```php
    mb_levenshtein_ratio ( string $str1 , string $str2 , int $cost_ins , int $cost_rep , int $cost_del ) : float
    ```

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
$ # The smaller, the closer
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
Using version ^1.0 for keinos/mb_levenshtein
./composer.json has been created
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 1 install, 0 updates, 0 removals
  - Installing keinos/mb_levenshtein (1.0.0): Downloading (100%)
Writing lock file
Generating autoload files
$ # The smaller, the closer
$ php ./sample.php
Query word: cafe
  coffee: 3
  café: 1
  tea: 4
  sake: 2
$ ls
composer.json   composer.lock   sample.php  vendor
$ cat composer.json
{
    "require": {
        "keinos/mb_levenshtein": "^1.0"
    }
}
```
