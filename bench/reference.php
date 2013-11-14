<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bench\Reference;

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

    public function dummyReference(&$tab)
    {
        $tab[] = 'anew entry';
    }

    public function dummyClassVariable()
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
        $myBench->dummyReference($tab);
    }
    $endA = microtime(true);
    echo count($tab);
    echo ' Reference : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $myBench->dummyClassVariable();

    }
    echo count($myBench->tab);
    $endB = microtime(true);

    echo ' class variable : ' . ($endB - $startB) . PHP_EOL;
}
