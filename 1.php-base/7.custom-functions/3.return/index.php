<meta charset="utf-8">
<?php
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

function func($num): float|int {
    return $num * $num;
}

$result = func(3);
$result += func(3) + 1;
echo $result; // выведет 19
echo "<br>";
echo "<br>";
echo "<br>";

function func1($num): float|int {
    return $num * $num;
}

$result = func1(3);
++$result;
echo $result; // выведет 10
echo "<br>";
echo "<br>";

$result = func(2) + func(3);
echo $result; // выведет 13
echo "<br>";
echo "<br>";
echo "<br>";

$result = func(func(2));
echo $result; // выведет 16
echo "<br>";
echo "<br>";
echo "<br>";

function square($num): float|int {
    return $num * $num;
}

function cube($num): float|int {
    return $num * $num * $num;
}

$result = cube(square(2));
echo $result;
echo "<br>";
echo "<br>";
echo "<br>";

function sum($num1, $num2) {
    return $num1 + $num2;
}

$result = sum(square(2), square(3));
echo $result;
echo "<br>";
echo "<br>";

function func2($num): float|int {
    return $num * $num;

    echo '!'; // этот код никогда не выполнится
}

$result = func2(3);
echo "<br>";
echo "<br>";
echo "<br>";

function func3(): int {
    $sum = 0;
    for ($i = 1; $i <= 5; $i++) {
        $sum += $i;
    }

    return $sum;
}

$result = func3();
echo $result; // выведет 15
echo "<br>";
echo "<br>";
echo "<br>";

// функция, которая определяет, сколько первых элементов массива нужно сложить, чтобы сумма стала больше или равна 10:
function func4($arr): mixed {
    $sum = 0;
    foreach ($arr as $i => $iValue) {
        $sum += $iValue;

        // Если сумма больше или равна 10:
        if ($sum >= 10) {
            return $i + 1; // выходим из цикла и из функции
        }
    }

    return $sum;
}

$result = func4([1, 2, 3, 4, 5]);
echo $result;
echo "<br>";
echo "<br>";
echo "<br>";

// функция, которая вычисляет, сколько целых чисел, начиная с 1, нужно сложить, чтобы результат был больше 100:
function func5(): int {
    $sum = 0;
    $i = 1;
    while (true) { // бесконечный цикл
        $sum += $i;
        if ($sum >= 100) {
            return $i; // цикл крутится пока не выйдет тут
        }
        $i++;
    }
}

echo func5();
echo "<br>";
echo "<br>";
echo "<br>";

function func6($num): float|int {
    if ($num >= 0) {
        return sqrt($num);
    }
    return 0;
}

echo func6(3);
echo "<br>";
echo "<br>";
echo "<br>";

function func7($num1, $num2) {
    if ($num1 > 0 && $num2 > 0) {
        return $num1 * $num2;
    }
    return $num1 - $num2;
}

echo func7(3, 4);

?>
