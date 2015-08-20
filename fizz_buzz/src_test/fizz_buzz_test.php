<?php

require_once('../src/fizz_buzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    private $fizzBuzz;

    public function __construct () {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testNormalNumbersReturnSameNumber () {
        $this->assertEquals($this->fizzBuzz->run(1), 1);
        $this->assertEquals($this->fizzBuzz->run(2), 2);
        $this->assertEquals($this->fizzBuzz->run(4), 4);
    }

    public function testMultiplesOfThreeReturnFizz () {
        $this->assertEquals($this->fizzBuzz->run(3), FizzBuzz::FIZZ);
        $this->assertEquals($this->fizzBuzz->run(9), FizzBuzz::FIZZ);
        $this->assertEquals($this->fizzBuzz->run(123), FizzBuzz::FIZZ);
    }

    public function testMultiplesOfFiveReturnBuzz () {
        $this->assertEquals($this->fizzBuzz->run(5), FizzBuzz::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(20), FizzBuzz::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(200), FizzBuzz::BUZZ);
    }

    public function testMultiplesOfThreeAndFiveReturnFizzBuzz () {
        $this->assertEquals($this->fizzBuzz->run(15), FizzBuzz::FIZZBUZZ);
        $this->assertEquals($this->fizzBuzz->run(45), FizzBuzz::FIZZBUZZ);
        $this->assertEquals($this->fizzBuzz->run(315), FizzBuzz::FIZZBUZZ);
    }

}
