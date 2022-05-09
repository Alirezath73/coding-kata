<?php

use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    public function calc_lenght_of_string($strig, $lenght)
    {
        $calculator = new App\StringCalculator;

        $this->assertEquals($lenght, $calculator->add($strig));
    }

    public function provider()
    {
        return [
          ['a',1],
          ['ab',2],
          ['abc',3],
          ['abcd',4],
        ];
    }
}
