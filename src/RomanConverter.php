<?php

namespace NumeralsConverter;

class RomanConverter
{
    private static $numbersMap = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public static function toRoman($integer)
    {
        if(!is_int($integer)) {
            throw new \Exception('Parameter should be integer number.');
        }

        $result = '';
        while($integer > 0) {
            foreach(self::$numbersMap as $roman => $arbic) {
                if($integer >= $arbic) {
                    $integer -= $arbic;
                    $result .= $roman;
                    break;
                }
            }
        }

        return $result;
    }
}