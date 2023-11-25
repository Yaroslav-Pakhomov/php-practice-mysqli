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
foreach ($arr as $elem) {
    echo $elem;
}
echo "<br>";
echo "<br>";

$arr = [1, 2, 3, 4, 5];
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    echo $arr[$i];
}
echo "<br>";
echo "<br>";

$length = count($arr);
for ($i = 1; $i < $length; $i++) {
    echo $arr[$i];
}
echo "<br>";
echo "<br>";


$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$sum = 0;
$length = count($arr);
for ($i = 0; $i < $length; $i++) {
    $sum += $arr[$i];
}
echo $sum;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>