<?php

namespace App;

class PrimeFactors
{
    public function generate($number)
    {
        /**
         * 1. Is the number divisible by 2?
         * 2. If so, divide the number by 2. If false, increase the divisor and move on.
         * 3. Repeat.
         * 4. ???
         * 5. Profit.
         */
        $factors = [];

        for ($divisor = 2; $number > 1; $divisor++) {
            for (;$number % $divisor == 0; $number /= $divisor) {
                $factors[] = $divisor;
            }
        }

        return $factors;
    }
}
