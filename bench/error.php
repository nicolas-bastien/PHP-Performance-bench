<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


function bench_error()
{
    bench_hide_isset_error(1000000);
    bench_hide_error(1000000);
}

function bench_hide_isset_error($max)
{
    echo 'Bench : hide isset' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    $arrayTest = array('key_test' => 'value_test');
    for ($i = 0; $i <= $max; $i++) {
        $value = @$arrayTest['key_test'];
        if (isset($value)){
            $result = 1;
        }
        $valueNotSet = @$arrayTest['key_test_not_set'];
        if (isset($valueNotSet)){
            $result = 1;
        }
    }
    $endA = microtime(true);

    echo ' @ : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if (isset($arrayTest['key_test'])){
            $value = $arrayTest['key_test'];
            $result = 1;
        }
        if (isset($arrayTest['key_test_not_set'])){
            $value = $arrayTest['key_test_not_set'];
            $result = 1;
        }
    }
    $endB = microtime(true);

    echo ' isset : ' . ($endB - $startB) . PHP_EOL;
}



function bench_hide_error($max)
{
    echo 'Bench : hide @' . PHP_EOL;

    $value = 'test_value';

    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $newValue = @iconv('UTF-8', 'US-ASCII//IGNORE', $value);
    }
    $endA = microtime(true);

    echo ' @iconv : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $newValue = @iconv('UTF-8', 'US-ASCII//IGNORE', $value);
    }
    $endB = microtime(true);

    echo ' iconv : ' . ($endB - $startB) . PHP_EOL;
}
