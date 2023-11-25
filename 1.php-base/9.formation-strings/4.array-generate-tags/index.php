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


for ($i = 1; $i <= 5; $i++) {
    echo '<p>' . $i . '</p>';
}
echo "<br>";
echo "<br>";
echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    echo '<p>' . $i . '</p>';
}

echo '<ul>';
for ($i = 1; $i <= 5; $i++) {
    echo '<li>' . $i . '</li><br> ';
}
echo '</ul>';
echo "<br>";
echo "<br>";
echo "<br>";

// Массивы
$arr = [1, 2, 3, 4, 5];

foreach ($arr as $elem) {
    echo '<p>' . $elem . '</p>';
}
echo "<br>";
echo "<br>";
echo "<br>";


$arr = ['text1', 'text2', 'text3'];
echo '<select>';
foreach ($arr as $option) {
    echo '<option>' . $option . '</option>';
}
echo '</select>';
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
