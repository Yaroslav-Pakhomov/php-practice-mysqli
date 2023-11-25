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

$test = false;

if ($test == 0) echo '+'; else echo '-';
echo "<br>";

if ($test == 0) echo '+'; else
    echo '-';
echo "<br>";

if ($test == 0) echo '+'; else echo '-';
echo "<br>";


?>