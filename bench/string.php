<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function bench_string()
{
    bench_strncmp(10000);
}


/**
 * bench_strncmp(1000);
 * A : 0.022711992263794
 * B : 0.0071439743041992
 */
function bench_strncmp($max)
{
    echo 'Bench strncmp vs strpos vs substr' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (strncmp($value, 'F_TRAGENF', 9) == 0) {
            //
        }
    }
    $endA = microtime(true);

    echo ' strncmp : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (0 === strpos($value, 'F_TRAGENF')) {
            ///
        }

    }
    $endB = microtime(true);

    echo ' strpos : ' . ($endB - $startB) . PHP_EOL;

    //voir == avec substr
    $startC = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ('F_TRAGENF' === substr($value, 0, 9)) {
            ///
        }

    }
    $endC = microtime(true);

    echo ' substr : ' . ($endC - $startC) . PHP_EOL;
}
