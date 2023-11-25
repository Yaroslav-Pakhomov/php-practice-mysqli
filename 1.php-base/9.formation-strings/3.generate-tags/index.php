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

// Тэги
$text = 'aaa';
echo '<p>' . $text . '</p>';
echo "<br>";
echo "<p>$text</p>";
echo "<br>";
echo "<br>";
echo "<br>";

$text1 = 'aaa';
$text2 = 'bbb';
$text3 = 'ccc';
echo '<p>' . $text1 . '</p>';
echo '<p>' . $text2 . '</p>';
echo '<p>' . $text3 . '</p>';
echo "<br>";
echo "<br>";
echo "<br>";

// Атрибуты
$text = 'link';
$href = 'index.html';
echo "<a href=\"$href\">$text</a>";
echo "<br>";
echo '<a href="' . $href . '">' . $text . '</a>';
echo "<br>";
echo "<br>";
$src1 = '1.png';
$src2 = '2.png';
$src3 = '3.png';
echo '<img src="' . $src1 . '" alt="' . $src1 . ' " /><br>';
echo '<img src="' . $src2 . '" alt="' . $src2 . ' " /><br>';
echo '<img src="' . $src3 . '" alt="' . $src3 . ' " /><br>';
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
echo "<br>";

?>
