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


echo "<br>";
echo "<br>";
echo "<br>";
?>
<a href="index.php?par1=1&par2=2">ссылка</a>
<br>
<br>
<!--Страницу в ссылке можно не указывать, тогда мы вернемся на текущую страницу-->
<a href="?par1=1&par2=2">ссылка</a>
<br>
<br>
<a href="?number=1">1-е число</a>
<br>
<br>
<a href="?number=2">2-е число</a>
<br>
<br>
<a href="?number=3">3-е число</a>
<!---->

<?php
echo "<br>";
echo "<br>";
echo "<br>";
for ($i = 1; $i <= 10; $i++) {
    echo '<a href="?number-link=' . $i . '">ссылка ' . $i . '</a><br>';
}
echo "<br>";
if (!empty($_GET['number-link'])) {
    echo $_GET['number-link'];
}
echo "<br>";
echo "<br>";
echo "<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
foreach ($arr as $link) {
    echo '<a href="?arr-link=' . $link . '">' . strtoupper($link) . '</a><br>';
}
echo "<br>";
if (!empty($_GET['arr-link'])) {
    echo $_GET['arr-link'];
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

?>
