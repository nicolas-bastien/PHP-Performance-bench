<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function bench_array()
{
    bench_in_array(10000);
}

/**
 * Compare in_array test vs multiple || and ==
 */
function bench_in_array($max)
{
    echo 'in_array vs ||' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (($value == 'value_1') || ($value == 'value_2') || ($value == 'value_3') ||
            ($value == 'value_4') || ($value == 'value_5') ||
            ($value == 'value_6') || ($value == 'value_7') || ($value == 'value_8') ||
            ($value == 'value_9') || ($value == 'value_10') ||
            ($value == 'value_11')) {
            //something
        }
    }
    $endA = microtime(true);

    echo ' Multiple || : ' . ($endA - $startA) .PHP_EOL;

    $values = array_keys(array(
        'value_1','value_2','value_3','value_4','value_5','value_6','value_7',
        'value_8','value_9','value_10','value_11'
    ));
    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (isset($values[$value])) {
            ///
        }
    }
    $endB = microtime(true);

    echo ' in_array : ' . ($endB - $startB) . PHP_EOL;
}
