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

$arr = [
    ['href' => '1.html', 'text' => 'link1'],
    ['href' => '2.html', 'text' => 'link2'],
    ['href' => '3.html', 'text' => 'link3'],
];
foreach ($arr as $a) {
    echo '<a href="' . $a['href'] . '">' . $a['text'] . '</a><br>';
}
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [
    ['href' => 'page1.html', 'text' => 'text1'],
    ['href' => 'page2.html', 'text' => 'text2'],
    ['href' => 'page3.html', 'text' => 'text3'],
];
echo '<ul>';
foreach ($arr as $a) {
    echo '<li><a href="' . $a['href'] . '">' . $a['text'] . '</a></li><br>';
}
echo '</ul>';
echo "<br>";
echo "<br>";
echo "<br>";

$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];
echo '<select>';
foreach ($arr as $option) {
    echo '<option value="' . $option['value'] . '">' . $option['text'] . '</option>';
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
