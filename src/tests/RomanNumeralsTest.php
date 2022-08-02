<?php


use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_generates_the_roman_numerals_for_1($number, $numeral)
    {
        $this->assertEquals($numeral, RomanNumerals::generate($number));
    }

    /**
     * @test
     */
    function it_cannot_generate_a_roman_numeral_for_less_than_1()
    {
        $this->expectException(\InvalidArgumentException::class);
        RomanNumerals::generate(0);
    }

    /**
     * @test
     */
    function it_cannot_generate_a_roman_numeral_for_less_than_3999()
    {
        $this->expectException(\InvalidArgumentException::class);
        RomanNumerals::generate(4000);
    }

    function checks(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
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
            [3999, 'MMMCMXCIX'],
        ];
    }
}
