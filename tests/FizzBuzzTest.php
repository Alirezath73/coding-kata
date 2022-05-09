<?php
use PHPUnit\Framework\TestCase;
use App\FizzBuzz;
use Exception;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    public function it_print_fizz_or_buzz($value, $expected)
    {
        $fizzBuzz = new FizzBuzz;

        $this->assertEquals($expected, $fizzBuzz->print($value));
    }

    /**
     * @test
     */
    public function it_throws_exception_for_1()
    {
        $fizzBuzz = new FizzBuzz;

        $this->expectException(Exception::class);

        $fizzBuzz->print(1);
    }

    public function provider()
    {
        return [
          [3,'Fizz'],
          [5,'Buzz'],
          [6,'Fizz'],
          [9,'Fizz'],
          [10,'Buzz'],
          [12,'Fizz'],
          [15,'FizzBuzz'],
      ];
    }
}
