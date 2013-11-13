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
}


function bench_is_null($max)
{
    echo 'Bench is_null vs == null vs === null' . PHP_EOL;

    $valueNull = null;
    $valueNotNull = 'test_value';


    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (is_null($valueNull)) {

        }
        if (is_null($valueNotNull)){

        }
    }
    $endA = microtime(true);

    echo ' is_null : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($valueNull == null) {

        }
        if ($valueNotNull == null){

        }
    }
    $endB = microtime(true);

    echo ' == null : ' . ($endB - $startB) . PHP_EOL;

    $startC = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($valueNull === null) {

        }
        if ($valueNotNull === null){

        }
    }
    $endC = microtime(true);

    echo ' === null : ' . ($endC - $startC) . PHP_EOL;
}