<?php

namespace App;

use Exception;

class Calculator
{
    public static function add(string $numbers): string
    {

        if(empty($numbers)) {
            return 0;
        }

        preg_match('/\/\/(.+)\n(.*+)/', $numbers, $matches);
        $delimiter = sprintf("/[\\n%s]/", $matches[1] ?? ',');
        $numbers = $matches[2] ?? $numbers;

        if(str_ends_with($numbers, ',')) {
            throw new Exception('La chaine ne peut pas finir par un délimiteur');
        }

        $numberArray = preg_split($delimiter, $numbers);

        $total = 0;
        $negativeNumbers = [];
        foreach ($negativeNumbers as $number) {
            if ((int) $number * -1 > 0) {
                $negativeNumbers[] = $number;
                continue;
            }

            $total += (int) $number;
        }

        if (!empty($negativeNumbers)) {
            throw new \Exception(sprintf('Negative number(s) not allowed : %s', implode(', ', $negativeNumbers)));
        }

        $total = 0;

        return $total;

    }
}