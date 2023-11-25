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

$arr = ['employee1' => 100, 'employee2' => 200, 'employee3' => 300, 'employee4' => 400, 'employee5' => 500, 'employee6' => 600, 'employee7' => 700,];
print_r($arr);
echo '<br>';
$proc = 20;
foreach ($arr as $key => $zp) {
    if ($zp <= 400) {
        $arr[$key] *= (100 + $proc) / 100;
    }
}
print_r($arr);
echo "<br>";
echo "<br>";

$sumKey = 0;
$sumValue = 0;
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
foreach ($arr as $key => $value) {
    $sumKey += $key;
    $sumValue += $value;
}
echo $sumKey / $sumValue;
echo "<br>";
echo "<br>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
foreach ($arr as $key => $value) {
    $arr1[] = $key;
    $arr2[] = $value;
}
print_r($arr1);
echo '<br>';
print_r($arr2);
echo "<br>";
echo "<br>";

$arr = [1 => 125, 2 => 225, 3 => 128, 4 => 356, 5 => 145, 6 => 281, 7 => 452,];
$arr1 = [];
print_r($arr);
echo '<br>';

foreach ($arr as $elem) {
    $elem = (string)$elem;
    if ($elem[0] === 1 || $elem[0] === 2) {
        $arr1[] = $elem;
    }
}
print_r($arr1);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>