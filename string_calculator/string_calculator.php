<?php

namespace brhmms\katas;

class StringCalculator {
    
    public function add(string $string) {
        $numbers = explode(',', $string);
        $sum = 0;
        foreach ($numbers as $number) {
            $sum += $number;
        }
        return $sum;
    }
}
