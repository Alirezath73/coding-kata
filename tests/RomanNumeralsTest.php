<?php

use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider provider
     */
    public function it_generate_roman_numerals($number, $expected)
    {
        $this->assertEquals($expected, App\RomanNumerals::generate($number));
    }

    public function provider()
    {
        return [
        [1, 'I'],
        [2, 'II'],
        [3, 'III'],
        [4, 'IV'],
        [5, 'V'],
        [6, 'VI'],
        [7, 'VII'],
        [8, 'VIII'],
        [9, 'IX'],
        [10, 'X'],
        [40, 'XL'],
        [50, 'L'],
        [90, 'XC'],
        [100, 'C'],
        [400, 'CD'],
        [500, 'D'],
        [900, 'CM'],
        [1000, 'M'],
        [3999, 'MMMCMXCIX']
    ];
    }
}
