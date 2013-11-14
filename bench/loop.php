<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function bench_loop()
{
    bench_foreach_array_key_numeric(10000);
}

function bench_foreach_array_key_numeric($max)
{
    echo 'Bench : skeleton' . PHP_EOL;

    $arrayTest = array(
        'value_1', 'value_2', 'value_3', 'value_4', 'value_5',
        'value_6', 'value_7', 'value_8', 'value_9', 'value_10'
    );
    $arrayTest = array_merge($arrayTest, $arrayTest, $arrayTest, $arrayTest, $arrayTest);

    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        foreach ($arrayTest as $value) {
            $result = $value;
        }
    }
    $endA = microtime(true);

    echo ' foreach : ' . ($endA - $startA) .PHP_EOL;

    $startAB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        foreach ($arrayTest as &$value) {
            $result = $value;
        }
    }
    $endAB = microtime(true);

    echo ' foreach with reference : ' . ($endAB - $startAB) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        for ($j = 0, $nb = count($arrayTest); $j < $nb; $j++) {
            $result = $arrayTest[$j];
        }
    }
    $endB = microtime(true);

    echo ' for with count: ' . ($endB - $startB) . PHP_EOL;

    $startC = microtime(true);
    $nb = count($arrayTest);
    for ($i = 0; $i <= $max; $i++) {
        for ($j = 0; $j < $nb; $j++) {
            $result = $arrayTest[$j];
        }
    }
    $endC = microtime(true);

    echo ' for without count : ' . ($endC - $startC) . PHP_EOL;

    $startD = microtime(true);
    $nb = count($arrayTest);
    for ($i = 0; $i <= $max; $i++) {
        $j = 0;
        while ($j < $nb) {
            $result = $arrayTest[$j];
            $j++;
        }
    }
    $endD = microtime(true);

    echo ' while with count : ' . ($endD - $startD) . PHP_EOL;

    $startE = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        while (list($key, $value) = each($arrayTest)) {
            $result = $value;
        }
    }
    $endE = microtime(true);

    echo ' while with list/each : ' . ($endE - $startE) . PHP_EOL;

    $startEB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        while (list($key, $value) = each($arrayTest)) {
            $result = $value;
        }
    }
    $endEB = microtime(true);

    echo ' while with list/each with reference : ' . ($endEB - $startEB) . PHP_EOL;
}
