<?php


use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzAlgoTest extends TestCase
{

    /**
     * @test
     * @dataProvider fizzbuzz
     *
     * @param $number
     * @param $expected
     */
    public function fizzbuzz_algorithm(
      $number,
      $expected
    ) {
        $fizzbuzz = new FizzBuzz();

        $this->assertEquals($expected,
          $fizzbuzz->print($number));
    }

    public function fizzbuzz()
    {
        return [
          [1, 1],
          [2, 2],
          [3, 'Fizz'],
          [4, 4],
          [5, 'Buzz'],
          [6, 'Fizz'],
          [7, 7],
          [8, 8],
          [9, 'Fizz'],
          [10, 'Buzz'],
          [11, 11],
          [12, 'Fizz'],
          [13, 13],
          [14, 14],
          [15, 'FizzBuzz'],
          [16, 16],
          [17, 17],
          [18, 'Fizz'],
          [19, 19],
          [20, 'Buzz'],
        ];
    }

}
