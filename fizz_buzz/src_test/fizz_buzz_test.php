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
        $this->assertEquals($this->fizzBuzz->run(3), 'fizz');
        $this->assertEquals($this->fizzBuzz->run(9), 'fizz');
        $this->assertEquals($this->fizzBuzz->run(123), 'fizz');
    }

    public function testMultiplesOfFiveReturnBuzz () {
        $this->assertEquals($this->fizzBuzz->run(5), 'buzz');
        $this->assertEquals($this->fizzBuzz->run(20), 'buzz');
        $this->assertEquals($this->fizzBuzz->run(200), 'buzz');
    }

    public function testMultiplesOfThreeAndFiveReturnFizzBuzz () {
        $this->assertEquals($this->fizzBuzz->run(15), 'fizzbuzz');
        $this->assertEquals($this->fizzBuzz->run(45), 'fizzbuzz');
        $this->assertEquals($this->fizzBuzz->run(315), 'fizzbuzz');
    }

}
