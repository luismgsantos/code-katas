<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /** 
     * @test
     * @dataProvider factors
     */
    function it_generates_prime_factors($number, $expected)
    {
        $factors = new PrimeFactors;

        $this->assertEquals($expected, $factors->generate($number));
    }

    public function factors()
    {
        return [
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [10, [2, 5]],
            [27, [3, 3, 3]],
            [28, [2, 2, 7]],
            [29, [29]],
            [30, [2, 3, 5]],
            [31, [31]],
            [45, [3, 3, 5]],
            [50, [2, 5, 5]],
            [100, [2, 2, 5, 5]],
            [999, [3, 3, 3, 37]],
        ];
    }
}