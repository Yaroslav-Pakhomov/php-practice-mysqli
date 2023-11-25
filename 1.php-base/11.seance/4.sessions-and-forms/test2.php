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

echo '<a href="test1.php">Назад</a>';

echo '<br>';
echo '<br>';
echo '<br>';

if (!empty($_SESSION['surname']) && !empty($_SESSION['name']) && !empty($_SESSION['age'])) {
    echo 'Фамилия: ' . $_SESSION['surname'] . ', Имя: ' . $_SESSION['name'] . ', Возраст: ' . $_SESSION['age'];
}
