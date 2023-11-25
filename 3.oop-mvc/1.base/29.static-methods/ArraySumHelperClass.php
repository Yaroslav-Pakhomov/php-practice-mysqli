<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');


class ArraySumHelperClass {

    public static function getSum1(array $arr): float|object|int {
        return self::getSum($arr, 1);
    }

    public static function getSum2(array $arr): float|object|int {
        return self::getSum($arr, 2);
    }

    public static function getSum3(array $arr): float|object|int {
        return self::getSum($arr, 3);
    }

    public static function getSum4(array $arr): float|object|int {
        return self::getSum($arr, 4);
    }

    private static function getSum(array $arr, int $power): float|object|int {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += $elem ** $power;
        }

        return $sum;
    }
}
