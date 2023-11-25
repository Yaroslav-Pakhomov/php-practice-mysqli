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

$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i] *= 2;
}
var_dump($arr); // выведет [2, 4, 6, 8, 10]
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    // $arr[$i] = $arr[$i] ** 2;
    $arr[$i] **= 2;
}
var_dump($arr); // выведет [1, 4, 9, 16, 25]
echo "<br>";
echo "<br>";

// Сокращенные операции
$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i]++;
}
var_dump($arr); // выведет [2, 3, 4, 5, 6]
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i] += 5;
}
var_dump($arr); // выведет [6, 7, 8, 9, 10]
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    --$arr[$i];
}
var_dump($arr);
echo "<br>";

$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $arr[$i] += 10;
}
var_dump($arr);

echo "<br>";
echo "<br>";
echo "<br>";

?>