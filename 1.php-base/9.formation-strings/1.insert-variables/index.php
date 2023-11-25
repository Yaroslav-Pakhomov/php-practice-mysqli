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

// Вставка переменных
$str = 'aaa';
echo "xxx $str yyy";
echo "<br>";
echo 'xxx ' . $str . ' yyy';
echo "<br>";
echo "<br>";
echo "<br>";

// Вставка массивов
$arr = ['1', '2', '3'];
echo "xxx $arr[0] yyy";
echo "<br>";
echo 'aaa ' . $arr[0] . ' bbb ' . $arr[1];
echo "<br>";
echo "<br>";
echo "<br>";


$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo "xxx {$arr['a']} yyy";
echo "<br>";
echo 'xxx ' . $arr['a'] . ' yyy';
echo "<br>";
$elem = $arr['a'];
echo "xxx $elem yyy";
echo "<br>";
echo 'text ' . $arr['a'] . ' text ' . $arr['b'] . ' text ' . $arr['c'];
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
echo "<br>";
echo "<br>";

?>
