<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function bench_numeric()
{
    bench_increment(1000000);
}


function bench_increment($max)
{
    echo 'Bench : increment' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    $a = 0;
    $b = 0;
    for ($i = 0; $i <= $max; $i++) {
        $a++;
        $b++;
    }
    $endA = microtime(true);

    echo ' $a++ : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    $a = 0;
    $b = 0;
    for ($i = 0; $i <= $max; $i++) {
        ++$a;
        ++$b;
    }
    $endB = microtime(true);

    echo ' ++$a : ' . ($endB - $startB) . PHP_EOL;
}
