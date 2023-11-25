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

/*
    В начале цикла $i будет равно нулю,
    цикл будет выполнятся пока $i <= 9,
    после каждого прохода к $i прибавляется единица:
*/
for ($i = 0; $i <= 9; $i++) {
    echo $i; // выведет 1, 2... 9
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>