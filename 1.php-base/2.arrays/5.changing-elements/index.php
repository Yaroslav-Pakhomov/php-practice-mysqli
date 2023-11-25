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

$arr = ['a', 'b', 'c'];
$arr[0] = '!';
//	var_dump($arr); // выведет ['!', 'b', 'c']
echo "<br>";

// Перезапись элементов

$arr = ['a', 'b', 'c'];
$arr[0] .= '!';
$arr[1] .= '!';
$arr[2] .= '!';
//var_dump($arr); // выведет ['a!', 'b!', 'c!']
echo "<br>";

$arr = ['a', 'b', 'c'];
$arr[0] .= '!';
$arr[1] .= '!';
$arr[2] .= '!';
//var_dump($arr); // выведет ['a!', 'b!', 'c!']
echo "<br>";

// Инкремент и декремент

$arr = [1, 2, 3, 4];
$arr[0]++;
++$arr[1];
$arr[2]--;
--$arr[3];
//var_dump($arr); // выведет [2, 3, 2, 3]
echo "<br>";

$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a']++;
$arr['a']++;
$arr['b']--;
$arr['c']--;
$arr['c']--;
//var_dump($arr); // выведет [3, 1, 1]
echo "<br>";

?>