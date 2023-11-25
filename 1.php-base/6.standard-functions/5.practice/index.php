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

// Найдите сумму чисел от 1 до 100.
$arr = range(1, 100);
echo '<pre>';
// print_r($arr);
echo '</pre>';
echo "<br>";
// Сумма
$arrSum = array_sum($arr);
echo $arrSum . ' - сумма чисел от 1 до 100';
echo "<br>";
// Среднее арифметическое
$arithmeticMean = array_sum($arr) / count($arr);
echo $arithmeticMean . ' - среднее арифметическое элементов массива от 1 до 100';
echo "<br>";
echo "<br>";
echo "<br>";

// Заполните массив 10-ю иксами.
$arr = array_fill(0, 10, 'x');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

// Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись.
$arr = range(1, 10);
shuffle($arr);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

// Найдите факториал заданного числа.
function factorial(int $int): float|int|string {
    if ($int < 0) {
        return 'Введено некорректное число';
    }
    if ($int === 0) {
        return 1;
    }
    $arr = range(1, $int);
    return array_product($arr) . ' - факториал ' . $int;
}

echo factorial(10);
echo "<br>";
echo factorial(5);
echo "<br>";
echo factorial(0);
echo "<br>";
echo factorial(-1);
echo "<br>";
echo "<br>";
echo "<br>";

// Дано число. Найдите сумму цифр этого числа.
function getSumNumbers(int|string $int): string {
    $sumNumbers = 0;
    $strInt = (string)$int;
    $lenStrInt = mb_strlen($strInt);
    for ($i = 0; $i < $lenStrInt; $i++) {
        $sumNumbers += (int)$strInt[$i];
    }

    return $sumNumbers . ' - сумма цифр числа ' . $int;
}

echo getSumNumbers(3333);
echo "<br>";
echo getSumNumbers(123);
echo "<br>";
echo getSumNumbers(23);
echo "<br>";
echo "<br>";
echo "<br>";

// Дана строка. Сделайте заглавным последний символ этой строки.
function setUpperCase(string $string): array|string {
    $string = trim($string);
    $lenString = mb_strlen($string);
    $lastSymbol = mb_substr($string, $lenString - 1);
    $lastSymbol = mb_strtoupper($lastSymbol);

    return mb_substr_replace($string, $lastSymbol, $lenString - 1, 1);
}

/**
 * UTF-8 aware substr_replace.
 *
 * @param string $str
 * @param string $repl
 * @param int $start
 * @param int|null $length
 * @return string
 * @package    php-utf8
 * @subpackage functions
 * @see        http://www.php.net/substr_replace
 * @uses       utf8_strlen
 * @uses       utf8_substr
 */
function mb_substr_replace(string $str, string $repl, int $start, int $length = null): string {
    preg_match_all('/./us', $str, $ar);
    preg_match_all('/./us', $repl, $rar);

    $length = is_int($length) ? $length : mb_strlen($str);

    array_splice($ar[0], $start, $length, $rar[0]);

    return implode($ar[0]);
}


echo setUpperCase('   string   ');
echo "<br>";
echo setUpperCase('   строка   ');
echo "<br>";
echo "<br>";
echo "<br>";

// Дан массив с числами. Получите из него массив с квадратными корнями этих чисел.
function squareRoots(array $arr): array {
    foreach ($arr as $key => $value) {
        $arr[$key] = sqrt($value);
    }

    return $arr;
}

$arr = [1, 4, 9, 16, 25];
echo '<pre>';
print_r(squareRoots($arr));
echo '</pre>';

echo "<br>";
echo '<pre>';
print_r(squareRoots([121, 169, 144, 81, 36, 64, 49, 100]));
echo '</pre>';
echo "<br>";
echo "<br>";

// Заполните массив числами от 1 до 26 так, чтобы ключами этих чисел были буквы английского алфавита
$arrValues = range(1, 26);
$arrKeys = range('a', 'z');
$arr = array_combine($arrKeys, $arrValues);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

// Дана строка '1234567890'. Найдите сумму цифр из этой строки.
$string = '1234567890';
echo getSumNumbers($string);
echo "<br>";
echo "<br>";
echo "<br>";

// Найдите сумму пар чисел: 12 + 34 + 56 + 78 + 90

echo "<br>";
echo "<br>";
echo "<br>";

// Используя комбинацию функций заполните массив следующим образом: [[1, 2, 3], [4, 5, 6], [7, 8, 9]]
$arr = range(1, 9);
$arr = array_chunk($arr, 3);
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";


