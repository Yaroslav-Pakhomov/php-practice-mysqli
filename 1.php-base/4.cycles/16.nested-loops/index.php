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

for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i;
    }
}
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i . $j . ' ';
    }
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

?>