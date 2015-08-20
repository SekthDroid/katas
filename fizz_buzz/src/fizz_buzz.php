<?php
class FizzBuzz {
    const FIZZ = 'fizz';
    const BUZZ = 'buzz';
    const FIZZBUZZ = 'fizzbuzz';

    public function run($number) {
        $response = $number;
        
        if($number % 3 === 0) {
            $response = self::FIZZ;
        }
        if($number % 5 === 0) {
            $response = self::BUZZ;
        }
        if(($number % 3 === 0) and ($number % 5 === 0)) {
            $response = self::FIZZBUZZ;
        }

        return $response;
    }
}
