<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function bench_test()
{
    bench_if_3(100000);
    bench_if_9(100000);
    bench_if_20(100000);
    bench_if_ternary(1000000);
}

function bench_if_3($max)
{
    echo 'Bench if vs switch on 3 tests' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($value == 'test_value_1') {
            $result = 1;
        } elseif ($value == 'test_value_2') {
            $result = 1;
        } else {
            $result = 1;
        }
    }
    $endA = microtime(true);

    echo ' if/else : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        switch ($value) {
            case 'test_value_1':
                $result = 1;
                break;
            case 'test_value_2':
                $result = 1;
                break;
            default:
                $result = 1;
        }
    }
    $endB = microtime(true);

    echo ' switch : ' . ($endB - $startB) . PHP_EOL;
}

function bench_if_9($max)
{
    echo 'Bench if vs switch on 9 tests' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($value == 'test_value_1') {
            $result = 1;
        } elseif ($value == 'test_value_2') {
            $result = 1;
        } elseif ($value == 'test_value_3') {
            $result = 1;
        } elseif ($value == 'test_value_4') {
            $result = 1;
        } elseif ($value == 'test_value_5') {
            $result = 1;
        } elseif ($value == 'test_value_6') {
            $result = 1;
        } elseif ($value == 'test_value_7') {
            $result = 1;
        } elseif ($value == 'test_value_8') {
            $result = 1;
        } elseif ($value == 'test_value_9') {
            $result = 1;
        } else {
            $result = 1;
        }
    }
    $endA = microtime(true);

    echo ' if/else : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        switch ($value) {
            case 'test_value_1':
                $result = 1;
                break;
            case 'test_value_2':
                $result = 1;
                break;
            case 'test_value_3':
                $result = 1;
                break;
            case 'test_value_4':
                break;
            case 'test_value_5':
                $result = 1;
                break;
            case 'test_value_6':
                $result = 1;
                break;
            case 'test_value_7':
                $result = 1;
                break;
            case 'test_value_8':
                $result = 1;
                break;
            case 'test_value_9':
                $result = 1;
                break;
            default:
                $result = 1;
        }
    }
    $endB = microtime(true);

    echo ' switch : ' . ($endB - $startB) . PHP_EOL;
}

function bench_if_20($max)
{
    echo 'Bench if vs switch on 20 tests' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($value == 'test_value_1') {
            $result = 1;
        } elseif ($value == 'test_value_2') {
            $result = 1;
        } elseif ($value == 'test_value_3') {
            $result = 1;
        } elseif ($value == 'test_value_4') {
            $result = 1;
        } elseif ($value == 'test_value_5') {
            $result = 1;
        } elseif ($value == 'test_value_6') {
            $result = 1;
        } elseif ($value == 'test_value_7') {
            $result = 1;
        } elseif ($value == 'test_value_8') {
            $result = 1;
        } elseif ($value == 'test_value_9') {
            $result = 1;
        } elseif ($value == 'test_value_10') {
            $result = 1;
        } elseif ($value == 'test_value_11') {
            $result = 1;
        } elseif ($value == 'test_value_12') {
            $result = 1;
        } elseif ($value == 'test_value_13') {
            $result = 1;
        } elseif ($value == 'test_value_14') {
            $result = 1;
        } elseif ($value == 'test_value_15') {
            $result = 1;
        } elseif ($value == 'test_value_16') {
            $result = 1;
        } elseif ($value == 'test_value_17') {
            $result = 1;
        } elseif ($value == 'test_value_18') {
            $result = 1;
        } elseif ($value == 'test_value_19') {
            $result = 1;
        } elseif ($value == 'test_value_20') {
            $result = 1;
        } else {
            $result = 1;
        }
    }
    $endA = microtime(true);

    echo ' if/else : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        switch ($value) {
            case 'test_value_1':
                $result = 1;
                break;
            case 'test_value_2':
                $result = 1;
                break;
            case 'test_value_3':
                $result = 1;
                break;
            case 'test_value_4':
                $result = 1;
                break;
            case 'test_value_5':
                $result = 1;
                break;
            case 'test_value_6':
                break;
            case 'test_value_7':
                $result = 1;
                break;
            case 'test_value_8':
                $result = 1;
                break;
            case 'test_value_9':
                $result = 1;
                break;
            case 'test_value_10':
                $result = 1;
                break;
            case 'test_value_11':
                $result = 1;
                break;
            case 'test_value_12':
                $result = 1;
                break;
            case 'test_value_13':
                $result = 1;
                break;
            case 'test_value_14':
                $result = 1;
                break;
            case 'test_value_15':
                $result = 1;
                break;
            case 'test_value_16':
                $result = 1;
                break;
            case 'test_value_17':
                $result = 1;
                break;
            case 'test_value_18':
                break;
            case 'test_value_19':
                $result = 1;
                break;
            case 'test_value_20':
                $result = 1;
                break;
            default:
                $result = 1;
        }
    }
    $endB = microtime(true);

    echo ' switch : ' . ($endB - $startB) . PHP_EOL;
}

function bench_if_ternary($max)
{
    echo 'Bench if vs ternary' . PHP_EOL;

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        if ($value == 'test_1') {
            $result = 1;
        } else {
            $result = 2;
        }
    }
    $endA = microtime(true);

    echo ' if : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $result = ($value == 'test_1') ? 1 : 2;
    }
    $endB = microtime(true);

    echo ' ()?: : ' . ($endB - $startB) . PHP_EOL;
}
