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

echo '<b>жирный</b>';
echo "<br>";

echo '<b>';
echo 'жирный';
echo '</b>';
echo "<br>";

$str = 'жирный';
echo '<b>' . $str . '</b>';
echo "<br>";

$open = '<b>';
$close = '</b>';
echo $open . $str . $close;
echo "<br>";

// Атрибуты тегов

echo '<a href="../../index1.php">ссылка</a>';
echo "<br>";

$href = 'index1.php';
$text = 'ссылка';

echo '<a href="' . $href . '">' . $text . '</a>';
echo "<br>";

?>