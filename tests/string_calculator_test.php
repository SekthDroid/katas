<?php

include '../string_calculator/string_calculator.php';

use brhmms\katas\StringCalculator as SCalculator;

class StringCalculatorTest extends PHPUnit_Framework_TestCase {

    private $stringCalculator;

    public function __construct() {
        $this->stringCalculator = new SCalculator();
    }

}
