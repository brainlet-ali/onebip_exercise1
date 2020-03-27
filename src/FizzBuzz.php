<?php


namespace App;


class FizzBuzz
{

    public function isFizz($number)
    {
        return ($number % 3 === 0) ? 'Fizz' : false;
    }
}