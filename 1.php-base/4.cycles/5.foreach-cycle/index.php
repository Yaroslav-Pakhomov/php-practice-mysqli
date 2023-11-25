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
    echo $elem . '<br>';
}
echo "<br>";

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $elem) {
    echo $elem * $elem . '<br>';
}
echo "<br>";

$arr = [1, 2, 3, 4, 5];
$res = 0;
foreach ($arr as $elem) {
    $res += $elem;
}
echo $res;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>