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

if (isset($arr['test'])) {
    $elem = $arr['test'];
} else {
    $elem = 'empty';
}
echo "<br>";

// Перепишем через тернарный оператор:
$elem = isset($arr['test']) ? $arr['test'] : 'empty';
echo "<br>";

// Оператор объединения с null (??) подходит для действия, когда
// совместно используются тернарный оператор и функция isset().
// Он возвращает первый операнд, если он задан и не равен null,
// а в обратном случае возвращает второй операнд.
// Перепишем через оператор объединения с null, ??:
$elem = $arr['test'] ?? 'empty';
echo "<br>";

// Данный оператор можно использовать в цепочке.
// В этом примере мы сперва проверяем, задан ли $_GET['user'], если нет,
// то проверяем $_POST['user'], и если он тоже не задан, то присваиваем 'nobody'.
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";


echo "<br>";

?>