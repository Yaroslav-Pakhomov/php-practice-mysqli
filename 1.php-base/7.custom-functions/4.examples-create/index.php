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

function getSquareSum($arr) {
    $sum = 0;
    foreach ($arr as $elem) {
        $sum += $elem;
    }

    return $sum;
}

$arr1 = [1, 2, 3, 4];
$arr2 = [5, 6, 7, 8];

echo getSquareSum($arr1);
echo getSquareSum($arr2);
echo "<br>";
echo "<br>";
echo "<br>";

function getDivisors($val): array {
    $arr = [];
    for ($i = 2; $i < $val; $i++) {
        if ($val % $i === 0) {
            $arr[] = $i;
        }
    }
    return $arr;
}

echo '<pre>';
print_r(getDivisors(15));
echo '</pre>';

echo '<pre>';
print_r(getDivisors(30));
echo '</pre>';
echo "<br>";
echo "<br>";

function delElem($var, $arr) {
    foreach ($arr as $key => $value) {
        if ($var === $value) {
            unset($arr[$key]);
        }
    }
    return $arr;
}

echo '<pre>';
print_r(delElem(3, getDivisors(30)));
echo '</pre>';
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
