<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require 'bench/array.php';
require 'bench/string.php';
require 'bench/variable.php';
require 'bench/test.php';
require 'bench/reference.php';
require 'bench/numeric.php';
require 'bench/error.php';

bench_array();
bench_string();
bench_variable();
bench_test();
bench_reference();
bench_numeric();
bench_error();

function bench_skeleton($max)
{
    echo 'Bench : skeleton' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
    }
    $endA = microtime(true);

    echo ' A : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
    }
    $endB = microtime(true);

    echo ' B : ' . ($endB - $startB) . PHP_EOL;

    $startC = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
    }
    $endC = microtime(true);

    echo ' C : ' . ($endC - $startC) . PHP_EOL;

}