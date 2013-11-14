<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function bench_reference()
{
    bench_variable_reference(1000000);
}

class MyBench
{
    public $tab;

    public function __construct()
    {
        $this->tab = array();
    }

    public function dummy_reference(&$tab)
    {
        $tab[] = 'anew entry';
    }

    public function dummy_class_variable()
    {
        $this->tab[] = 'anew entry';
    }
}

function bench_variable_reference($max)
{
    $myBench = new MyBench();

    $tab = array();

    $value = 'test_value';
    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $myBench->dummy_reference($tab);
    }
    $endA = microtime(true);
    echo count($tab);
    echo ' Reference : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $myBench->dummy_class_variable();

    }
    echo count($myBench->tab);
    $endB = microtime(true);

    echo ' class variable : ' . ($endB - $startB) . PHP_EOL;
}
