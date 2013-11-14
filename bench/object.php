<?php
/**
 * This file is part of the PHP-Performance-bench.
 *
 * (c) Nicolas Bastien <nbastien.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Bench\Object;

function bench_object()
{
    bench_access(100000);
}

class MyObject
{
    public $var;

    public $subvar;

    public function __construct()
    {
        $this->var = new stdClass();
        $this->var->subvar = 'hello_subvar';
        $this->subvar = 'hello_subvar';
    }
}

function bench_access($max)
{
    echo 'Bench : object subvar access' . PHP_EOL;

    $myObject = new MyObject();

    $startA = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $value = $myObject->var->subvar;
    }
    $endA = microtime(true);

    echo ' subvar : ' . ($endA - $startA) .PHP_EOL;

    $startB = microtime(true);
    $subvar = $myObject->var->subvar;
    for ($i = 0; $i <= $max; $i++) {
        $value = $subvar;
    }
    $endB = microtime(true);

    echo ' local variable : ' . ($endB - $startB) . PHP_EOL;

    $startC = microtime(true);
    for ($i = 0; $i <= $max; $i++) {
        $value = $myObject->subvar;
    }
    $endC = microtime(true);

    echo ' class variable : ' . ($endC - $startC) . PHP_EOL;

}
