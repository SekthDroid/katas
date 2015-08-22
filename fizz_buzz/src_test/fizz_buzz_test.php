<?php

require_once('../src/fizz_buzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    const FIZZ = 'fizz';
    const BUZZ = 'buzz';
    const POP = 'pop';

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
        $this->assertEquals($this->fizzBuzz->run(3), self::FIZZ);
        $this->assertEquals($this->fizzBuzz->run(9), self::FIZZ);
        $this->assertEquals($this->fizzBuzz->run(123), self::FIZZ);
    }

    public function testMultiplesOfFiveReturnBuzz () {
        $this->assertEquals($this->fizzBuzz->run(5), self::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(20), self::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(200), self::BUZZ);
    }

    public function testMultiplesOfThreeAndFiveReturnFizzBuzz () {
        $this->assertEquals($this->fizzBuzz->run(15), self::FIZZ.self::BUZZ);
        $this->assertEquals($this->fizzBuzz->run(45), self::FIZZ.self::BUZZ);
    }

    public function testMultiplesOfSevenReturnPop () {
        $this->assertEquals($this->fizzBuzz->run(7), self::POP);
        $this->assertEquals($this->fizzBuzz->run(28), self::POP);
        $this->assertEquals($this->fizzBuzz->run(77), self::POP);
    }

    public function testMultiplesOfThreeAndSevenReturnFizzPop () {
        $this->assertEquals($this->fizzBuzz->run(21), self::FIZZ.self::POP);
        $this->assertEquals($this->fizzBuzz->run(63), self::FIZZ.self::POP);
        $this->assertEquals($this->fizzBuzz->run(126), self::FIZZ.self::POP);
    }

    public function testMultiplesOfFiveAndSevenReturnBuzzPop () {
        $this->assertEquals($this->fizzBuzz->run(35), self::BUZZ.self::POP);
        $this->assertEquals($this->fizzBuzz->run(70), self::BUZZ.self::POP);
        $this->assertEquals($this->fizzBuzz->run(140), self::BUZZ.self::POP);
    }

    public function MultiplesOfThreeFiveAndSevenReturnFizzBuzzPop () {
        $this->assertEquals($this->fizzBuzz->run(105), self::FIZZ.self::BUZZ.self::POP);
        $this->assertEquals($this->fizzBuzz->run(210), self::FIZZ.self::BUZZ.self::POP);
        $this->assertEquals($this->fizzBuzz->run(315), self::FIZZ.self::BUZZ.self::POP);
    }

}
