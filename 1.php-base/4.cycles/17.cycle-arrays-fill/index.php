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

$arr = [];
for ($i = 0; $i <= 4; $i++) {
    $arr[] = $i + 1;
}
var_dump($arr);
echo "<br>";
echo "<br>";

$arr = [];
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 === 0) continue;
    $arr[] = $i;
}
var_dump($arr);
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