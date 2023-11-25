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

$a = 1;
$b = 2;
if ($a === $b) {
    var_dump(true);
} else {
    var_dump(false);
}
echo "<br>";


// Конструкция if не является обязательной для сравнения - сами операторы вида ==, ===, !=, <, > и т.д. возвращают своим результатом либо true, либо false.

var_dump(1 === 1); // выведет true
var_dump(1 === 2); // выведет false
echo "<br>";

$a = 1;
$b = 2;
var_dump($a === $b);
echo "<br>";

$a = 1;
$b = 2;
$result = $a === $b;
var_dump($result);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";

?>