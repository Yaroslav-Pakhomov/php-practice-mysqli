<?php

declare(strict_types = 1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// Математические функции

// Работа со степенью
    // Функция sqrt находит квадратный корень числа sqrt(16); // 4
    // Функция pow возводит число в заданную степень. pow(число, степень), либо число ** степень  pow(2, 3); // 8 - эквивалентно 2 ** 3

// Работа с округлением
    // Функция round округляет до заданного значения значения precision как float. Если precision отрицателен, num округляется до точности precision цифр перед десятичной запятой round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float, round(число, [количество знаков]). round(sqrt(379), 2);
    // Функция ceil округляет дробь в большую сторону до целого ceil(число)
    // Функция floor округляет дробь в меньшую сторону floor(число)

// Работа с min и max
    // Функции min и max находят самое меньшее и большее значение соответственно min ( mixed $value , mixed ...$values ): mixed, min ( array $value_array ): mixed, аналогично для  max.

// Работа со случайными целыми числами
    // Функция random_int генерирует случайное целое число в заданном промежутке random_int(1, 100);

// Работа с модулем числа
    // Функция abs вычисляет модуль числа, то есть из отрицательного делает положительное echo abs($a - $b);



// Работа со степенью и корнем

// Функция sqrt находит квадратный корень числа.
echo sqrt(16); // 4
echo "<br>";
echo "<br>";
echo "<br>";

// Функция pow возводит число в заданную степень. pow(число, степень);
echo pow(2, 3); // 8
echo "<br>";
echo "<br>";

echo pow(2, 10);
echo "<br>";
echo "<br>";
echo sqrt(245);
echo "<br>";
echo "<br>";
echo "<br>";
$arr = [4, 2, 5, 19, 13, 0, 10];
$summa = 0;
$summaSquare = 0;
foreach ($arr as $key => $value) {
    $summa += $value;
    $arr[$key] = pow($value, 2);
    $summaSquare += $arr[$key];
}
echo $summa;
echo "<br>";
echo "<br>";
echo $summaSquare;
echo "<br>";
echo "<br>";
echo sqrt($summaSquare);
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с функциями округления
// round(число, [количество знаков]);
echo round(sqrt(379));
echo "<br>";
echo round(sqrt(379), 1);
echo "<br>";
echo round(sqrt(379), 2);
echo "<br>";
echo "<br>";

// ceil округляет дробь в большую сторону до целого ceil(число)
// floor округляет дробь в меньшую сторону floor(число)
$arr1['number'] = sqrt(587);
$arr1['floor'] = floor(sqrt(587));
$arr1['ceil'] = ceil(sqrt(587));
echo '<pre>';
print_r($arr1);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с min и max
$arr2 = [4, -2, 5, 19, -130, 0, 10];
echo min($arr2);
echo "<br>";
echo "<br>";
echo max($arr2);
echo "<br>";
echo "<br>";

// Работа с рандомом
// Функция mt_rand генерирует случайное целое число в заданном промежутке.
try {
    echo random_int(1, 100);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo "<br>";
echo "<br>";
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    try {
        $arr[$i] = random_int(1, 1000);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
file_put_contents(__DIR__ . '/Exception.txt', 'Прошли');
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с модулем
// Функция abs вычисляет модуль числа, то есть из отрицательного делает положительное.
$a = 10;
$b = 20;
echo abs($a - $b);

echo "<br>";
echo "<br>";
echo "<br>";





