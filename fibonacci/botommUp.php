<?php

namespace brhmms\katas;

use brhmms\katas\Fibonacci;

class BottomUp implements Fibonacci {

    private $fib = array();
    
    public function fib(int $number) {
        for ($k = 1; $k <= $number; $k++) {
            if ($k <= 2) {
                $f = 1;
            } else {
                $f = $this->fib[$k - 1] + $this->fib[$k - 2];
            }
            $this->fib[$k] = $f;
        }
        return $this->fib[$number];
    }

}
