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

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        echo $i . '<br>';
    }
}
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [];
$str = '';
for ($i = 0; $i < 10; $i++) {
    $str .= 'x';
    $arr[] = $str;
}
print_r($arr);
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 1; $i <= 10; $i++) {
    $arr[] = $i;
}
print_r($arr);
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, 4, 5, 6];
$length = count($arr);
$summ = 0;
for ($i = 0; $i < $length; $i++) {
    $summ += $arr[$i];
}
echo $summ;
echo "<br>";
echo "<br>";

//$arr = [1, 2, 3, 4, 5, 6];
$length = count($arr);
$summ = 0;
for ($i = 0; $i < $length; $i++) {
    $summ += $arr[$i] ** 2;
}
echo $summ;
echo "<br>";
echo "<br>";

//$arr = [1, 2, 3, 4, 5, 6];
$length = count($arr);
$summ = 0;
$middle = 0;
for ($i = 0; $i < $length; $i++) {
    $summ += $arr[$i];
    $middle = $summ / $length;
}
echo $middle;
echo "<br>";
echo "<br>";
echo "<br>";

$var = 0;
$fact = 1;
for ($i = 1; $i <= $var; $i++) {
    $fact *= $i;
}
echo $fact;
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

?>