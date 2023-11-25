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

session_start();
if (!isset($_SESSION['entry_time'])) {
    $_SESSION['entry_time'] = time();
}
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1; // первый заход на страницу
} else {
    $_SESSION['counter']++;   // последующие заходы
}

echo $_SESSION['counter'];
echo '<br>';
echo '<br>';
$duration = time() - $_SESSION['entry_time'];
echo 'Пользователь зашёл ' . $duration . ' секунд назад';

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
echo "<br>";
echo "<br>";




