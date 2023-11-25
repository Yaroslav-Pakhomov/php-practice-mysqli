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
    if ($elem % 2 == 0) {
        echo $elem;
    }
}
echo "<br>";

$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $elem) {
    if (in_array((int)substr($elem, 0, 1), [1, 2, 5])) {
        echo $elem . '<br>';
    }
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>