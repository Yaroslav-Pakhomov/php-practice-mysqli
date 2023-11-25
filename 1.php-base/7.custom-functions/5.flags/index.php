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

function isPrime($num): bool {
    $flag = true;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            $flag = false;
            break;
        }
    }

    return $flag;
}

var_dump(isPrime(10));
var_dump(isPrime(31));
echo "<br>";
echo "<br>";
echo "<br>";

function isPrime1($num): bool {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

echo "<br>";
echo "<br>";

// Проверка по массиву
var_dump(isPositive([1, -2, 3, 4, -5])); // выведет false
var_dump(isPositive([1, 2, 3, 4, 5]));   // выведет true

function isPositive($arr): bool {
    foreach ($arr as $elem) {
        if ($elem < 0) {
            return false;
        }
    }

    return true;
}

echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

?>
