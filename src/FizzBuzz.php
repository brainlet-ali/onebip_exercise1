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

    public function print($number)
    {
        return (!($this->isFizz($number)) && !($this->isBuzz($number))) 
          ? $number : 
          $this->isFizz($number) . $this->isBuzz($number);
    }
}