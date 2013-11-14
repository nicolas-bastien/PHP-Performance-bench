<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function bench_variable()
{
    bench_is_null(10000);
    bench_init(1000000);
    bench_compare(1000);
}

function bench_is_null($max)
{
    echo 'Bench is_null vs == null vs === null vs isset' . PHP_EOL;

    $valueNull = null;
    $valueNotNull = 'test_value';

    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (is_null($valueNull)) {

        }
        if (is_null($valueNotNull)) {

        }
    }
    $endA = microtime(true);

    echo ' is_null : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($valueNull == null) {

        }
        if ($valueNotNull == null) {

        }
    }
    $endB = microtime(true);

    echo ' == null : ' . ($endB - $startB) . PHP_EOL;

    $startC = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($valueNull === null) {

        }
        if ($valueNotNull === null) {

        }
    }
    $endC = microtime(true);

    echo ' === null : ' . ($endC - $startC) . PHP_EOL;

    $startD = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (!isset($valueNull)) {

        }
        if (!isset($valueNotNull )) {

        }
    }
    $endD = microtime(true);

    echo ' !isset : ' . ($endD - $startD) . PHP_EOL;

    $startE = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (isset($valueNull) === false) {

        }
        if (isset($valueNotNull) === false) {

        }
    }
    $endE = microtime(true);

    echo ' isset === false : ' . ($endE - $startE) . PHP_EOL;
}

function bench_init($max)
{
    echo 'Bench : init' . PHP_EOL;

    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $valueA = 'test_value';
        $valueB = 'test_value';
        $valueC = 'test_value';
        $valueD = 'test_value';
        $valueE = 'test_value';
    }
    $endA = microtime(true);

    echo ' Multiple lines : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $valueA = $valueB = $valueC = $valueD = $valueE = 'test_value';
    }
    $endB = microtime(true);

    echo ' One line : ' . ($endB - $startB) . PHP_EOL;
}

function bench_compare($max)
{
    echo 'Bench : compare' . PHP_EOL;

    $value = '2';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $s = (int) $value;
        if (($s == 0) || ($s == 1) || ($s == 2)) {

        }
    }
    $endA = microtime(true);

    echo ' || : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $s = (int) $value;
        if (0 <= $s && $s <=2) {

        }
    }
    $endB = microtime(true);

    echo ' >< : ' . ($endB - $startB) . PHP_EOL;

    $startBB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (0 <= (int) $value && (int) $value <=2) {

        }
    }
    $endBB = microtime(true);

    echo ' >< without variable : ' . ($endBB - $startBB) . PHP_EOL;

    $startC = microtime(true);
    $values = array(0,1,2);
    for ($i = 0; $i <= $max; $i++) {
        $s = (int) $value;
        if (in_array($s, $values)) {

        }
    }
    $endC = microtime(true);

    echo ' in_array : ' . ($endC - $startC) . PHP_EOL;

}
