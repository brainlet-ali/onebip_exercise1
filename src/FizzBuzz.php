<?php


namespace App;


class FizzBuzz
{

    public function isFizz($number)
    {
        return ($number % 3 === 0) ? 'Fizz' : false;
    }

    public function isBuzz($number)
    {
        return ($number % 5 === 0) ? 'Buzz' : false;
    }
}