<?php

include '../string_calculator/string_calculator.php';

use brhmms\katas\StringCalculator as SCalculator;

class StringCalculatorTest extends PHPUnit_Framework_TestCase {

    private $scalc;

    public function __construct() {
        $this->scalc = new SCalculator();
    }
    
    public function testEmptyStringReturnsZero() {
        $this->assertSame($this->scalc->add(''), 0);
    }
    
    public function testSumOfOneNumber() {
        $this->assertSame($this->scalc->add('2'), 2);
    }
    
    public function testSumOfTwoNumbers() {
        $this->assertSame($this->scalc->add('1,2'), 3);
    }

}
