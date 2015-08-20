<?php
class FizzBuzz {

    private $cases = array(
        15  => 'fizzbuzz',
        5   => 'buzz',
        3   => 'fizz',
    );

    public function run($number) {
        $response = $number;

        foreach ($this->cases as $case => $message) {
            if($number % $case === 0) {
                $response = $message;
                break;
            }
        }

        return $response;
    }
}
