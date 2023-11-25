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

if (!empty($_SESSION['data-user'])) {
    echo '<ul>';
    foreach ($_SESSION['data-user'] as $type_data => $data) {
        echo '<li>';
        echo $type_data . ' - ' . $data;
        echo '</li>';
    }
    echo '</ul>';
    echo '<br>';
    echo 'Фамилия: ' . $_SESSION['data-user']['surname'] . ', Имя: ' . $_SESSION['data-user']['name'] . ', Возраст: ' . $_SESSION['data-user']['age'] . ', Зарплата: ' . $_SESSION['data-user']['salary'];
}

session_destroy();
