<?php


use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    /**
     * @test
     * @dataProvider fizz
     *
     * @param $number
     * @param $expected
     */
    public function it_returns_the_word_fizz_if_divisible_by_3(
      $number,
      $expected
    ) {
        $fizz = new FizzBuzz();
        $this->assertEquals($expected, $fizz->isFizz($number));
    }

    public function fizz()
    {
        return [
          [1, false],
          [2, false],
          [3, 'Fizz'],
          [4, false],
          [5, false],
          [6, 'Fizz'],
          [7, false],
          [8, false],
          [9, 'Fizz'],
          [10, false],
          [11, false],
          [12, 'Fizz'],
          [13, false],
          [14, false],
          [15, 'Fizz'],
          [16, false],
          [17, false],
          [18, 'Fizz'],
          [19, false],
          [20, false],
        ];
    }

    /**
     * @test
     * @dataProvider buzz
     *
     * @param $number
     * @param $expected
     */
    public function it_returns_the_word_buzz_if_divisible_by_5(
      $number,
      $expected
    ) {
        $buzz = new FizzBuzz();
        $this->assertEquals($expected, $buzz->isBuzz($number));
    }

    public function buzz()
    {
        return [
          [1, false],
          [2, false],
          [3, false],
          [4, false],
          [5, 'Buzz'],
          [6, 6],
          [7, false],
          [8, false],
          [9, false],
          [10, false],
          [11, false],
          [12, false],
          [13, false],
          [14, false],
          [15, false],
          [16, false],
          [17, false],
          [18, false],
          [19, false],
          [20, 'Buzz'],
        ];
    }
}
