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

$num = 500;
while ($num > 10) {
    $num /= 2;
}
echo $num; // после цикла получим результат
echo "<br>";
echo "<br>";
echo "<br>";

$num = 500;
while ($num > 1000) {
    $num *= 3;
}
echo $num; // после цикла получим результат
echo "<br>";
echo "<br>";

// Использования цикла for
// Можно использовать и цикл for, но особым образом - без тела
for ($num = 500, $i = 1; $num > 10; $num /= 2, $i++) echo $num . ' ' . $i; // после цикла получим результат и количество совершенных циклом итераций
echo "<br>";
echo "<br>";
echo "<br>";


for ($num = 500, $i = 1; $num > 1000; $num *= 3, $i++) echo $num . ' ' . $i; // после цикла получим результат и количество совершенных циклом итераций
echo "<br>";
echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";

?>