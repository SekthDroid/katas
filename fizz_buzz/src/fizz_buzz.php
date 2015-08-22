<?php

class FizzBuzz {

    private $cases = array(
        3   => 'fizz',
        5   => 'buzz',
        7   => 'pop',
    );

    public function run($number) {
        $response = '';
        foreach ($this->cases as $case => $message) {
            if($number % $case === 0) {
                $response .= $message;
            }
        }
        return $response ?: $number;
    }
}
