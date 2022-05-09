<?php

use PHPUnit\Framework\TestCase;
use App\PrimeFactors;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     * @dataProvider factors
     */
    public function it_generates_prime_factors($nember, $expected)
    {
        $factors = new PrimeFactors;

        $this->assertEquals($expected, $factors->generate($nember));
    }

    public function factors()
    {
        return [
          [1,[]],
          [2,[2]],
          [3,[3]],
          [4,[2,2]],
        ];
    }
}
