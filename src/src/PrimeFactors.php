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
        $divisor = 2;

        while ($number > 1) {
            while ($number % $divisor == 0) {
                $factors[] = $divisor;

                $number = $number / $divisor;
            }

            $divisor++;
        }

        return $factors;
    }
}
