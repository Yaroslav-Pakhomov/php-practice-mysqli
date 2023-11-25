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

// $_SESSION['flash'] = 'Флеш сообщение';
// header('Location: index1.php');

$_SESSION['flash'][] = 'Флеш сообщение 2';
