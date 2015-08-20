<?php
class FizzBuzz {
    const FIZZ = 'fizz';
    const BUZZ = 'buzz';
    const FIZZBUZZ = 'fizzbuzz';

    private static $cases = array(
        15=> self::FIZZBUZZ,
        5 => self::BUZZ,
        3 => self::FIZZ,
    );

    public function run($number) {
        $response = $number;

        foreach (self::$cases as $case => $message) {
            if($number % $case === 0) {
                $response = $message;
                break;
            } 
        }

        return $response;
    }
}
