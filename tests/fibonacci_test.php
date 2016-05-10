<?php

include '../fibonacci/fibonacci.php';
include '../fibonacci/naive.php';
include '../fibonacci/memoized.php';
include '../fibonacci/botommUp.php';

use brhmms\katas\Naive;
use brhmms\katas\Memoized;
use brhmms\katas\BottomUp;

class FibonacciTest extends PHPUnit_Framework_TestCase {

    public $fnaive;
    public $fmemoized;
    public $fbottomUp;

    public function __construct() {
        $this->fnaive = new Naive();
        $this->fmemoized = new Memoized();
        $this->fbottomUp = new BottomUp();
    }

    public function testNaiveImplementationEqualsTwo() {
        $this->assertEquals($this->fnaive->fib(2), 1);
        $this->assertEquals($this->fmemoized->fib(2), 1);
        $this->assertEquals($this->fbottomUp->fib(2), 1);
    }

    public function testNaiveImplementationGreaterThanTwo() {
        $this->assertEquals($this->fnaive->fib(10), 55);
        $this->assertEquals($this->fmemoized->fib(10), 55);
        $this->assertEquals($this->fbottomUp->fib(10), 55);
    }

}
