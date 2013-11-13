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

class MyBench {

    public $tab;

    function __construct()
    {
        $this->tab = array();
    }

    function dummy_reference(&$tab) {
        $tab[] = 'anew entry';
    }

    function dummy_class_variable(){
        $this->tab[] = 'anew entry';
    }
}

function bench_variable_reference($max) {
    $myBench = new MyBench();

    $tab = array();

    $value = 'test_value';
    $startA = microtime(TRUE);
    for ($i = 0; $i <= $max; $i++) {
        $myBench->dummy_reference($tab);
    }
    $endA = microtime(TRUE);
    echo count($tab);
    echo ' Reference : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(TRUE);
    for ($i = 0; $i <= $max; $i++) {
        $myBench->dummy_class_variable();

    }
    echo count($myBench->tab);
    $endB = microtime(TRUE);

    echo ' class variable : ' . ($endB - $startB) . PHP_EOL;
}

