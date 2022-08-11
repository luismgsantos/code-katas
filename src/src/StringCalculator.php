<?php

namespace App;


use Exception;

class StringCalculator
{
    const MAX_NUMBER_ALLOWED = 1000;

    protected string $delimiter = ",|\n";

    /**
     * @throws Exception
     */
    public function add(string $numbers): int
    {
        $this->disallowNegatives($numbers = $this->parseString($numbers));

        return array_sum(
            $this->ignoreGreaterThan1000($numbers)
        );
    }

    /**
     * @param array $numbers
     * @return void
     * @throws Exception
     */
    protected function disallowNegatives(array $numbers): void
    {
        foreach ($numbers as $number) {
            if ($number < 0) {
                throw new Exception("Negative numbers are not allowed.");
            }
        }
    }

    /**
     * @param array $numbers
     * @return array
     */
    public function ignoreGreaterThan1000(array $numbers): array
    {
        return array_filter(
            $numbers, fn ($number) => $number <= self::MAX_NUMBER_ALLOWED
        );
    }

    /**
     * @param string $numbers
     * @return array
     */
    public function parseString(string $numbers): array
    {
        $customDelimiter = "\/\/(.)\n";

        if (preg_match("/$customDelimiter/", $numbers, $matches)) {
            $this->delimiter = $matches[1];

            $numbers = str_replace($matches[0], '', $numbers);
        }

        return preg_split("/{$this->delimiter}/", $numbers);
    }
}