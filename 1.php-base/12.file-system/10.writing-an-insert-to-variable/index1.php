<?php

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// Запись вставки в переменную в PHP

// Будет проблема - при записи в переменную PHP код нашего файла не будет выполнен
// $res = file_get_contents('test.php');

// Для того чтобы PHP код вставляемого файла был выполнен, нужно использовать оператор include. Проблема, однако, в том, что этот оператор сразу выводит данные на экран, поэтому результат подключения не может быть записан в переменную.

// Но это все-таки можно сделать, если использовать хитрый прием, который оформим в функцию:

function getFile(string $name): false|string {
    ob_start();
    include $name;
    return ob_get_clean();
}

$res = getFile('file/test.php');

echo 'index' . $res;
echo "<br>";
echo "<br>";
echo "<br>";

$week_days = getFile('file/select.php');
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

echo $week_days;
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
echo "<br>";
echo "<br>";

echo $week_days;
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

echo $week_days;
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";
