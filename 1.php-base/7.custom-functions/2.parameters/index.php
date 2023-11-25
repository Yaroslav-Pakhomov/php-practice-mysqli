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

function func($num): void {
    echo $num * $num;
}

func(2); // выведет 4
func(3); // выведет 9
echo "<br>";
echo "<br>";
echo "<br>";

function func1($num): void {
    echo $num ** 3;
    echo '<br>';
}

func1(2); // выведет 8
func1(3); // выведет 27
echo "<br>";
echo "<br>";

// Несколько параметров
function func2($num1, $num2): void {
    echo $num1 + $num2;
}

func2(1, 2); // выведет 3
echo "<br>";
echo "<br>";
echo "<br>";

// Параметры-переменные
function func3($num): void {
    echo $num * $num;
}

$param = 2;
func3($param);
echo "<br>";
echo "<br>";
echo "<br>";

// Необязательные параметры
function func4($name = 'Аноним'): void {
    echo 'ваше имя: ' . $name;
}

// Без параметра:
func4(); // выведет 'ваше имя: Аноним'

// С параметром:
func4('Вася'); // выведет 'ваше имя: Вася'
echo "<br>";
echo "<br>";
echo "<br>";

function func5($name = 'Аноним', $age = 'неизвестен'): void {
    echo 'ваше имя: ' . $name . ' возраст: ' . $age;
}

echo "<br>";
echo "<br>";

// все необязательные параметры следует писать в конце.
function func6($name, $age = 'неизвестен'): void {
    echo 'ваше имя: ' . $name . ' возраст: ' . $age;
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

?>
