<?php

namespace App;

use Exception;

class FizzBuzz
{
    public function print(int $number)
    {
        if ($number % 3 === 0 and $number % 5 === 0) {
            return 'FizzBuzz';
        } elseif ($number % 5 === 0) {
            return 'Buzz';
        } elseif ($number % 3 === 0) {
            return 'Fizz';
        } else {
            throw new Exception("invalid number...");
        }
    }
}
