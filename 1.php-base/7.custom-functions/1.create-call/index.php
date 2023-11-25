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

function func(): void {
    echo '!';
}

func(); // выведет '!'
func(); // выведет '!'
func(); // выведет '!'
echo "<br>";
echo "<br>";
echo "<br>";

// Функции могут быть вызваны до места своего определения
func1(); // выведет '!'
function func1(): void {
    echo '!';
}

echo "<br>";
echo "<br>";

func2(); // выведет '!'
function func2(): void {
    echo 'Ярослав';
}

echo "<br>";
echo "<br>";
echo "<br>";

func3(4); // выведет '!'
function func3($arg): void {
    $s = 0;
    for ($i = 0; $i <= $arg; $i++) $s += $i;
    echo $s;
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
