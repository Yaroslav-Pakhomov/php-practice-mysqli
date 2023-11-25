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


// Работа с методами объектов

class User {
    public string $name;
    public int $age;

    // Параметры метода
    // Создаем метод:
    public function show($str): string {
        return $str . '!!!';
    }
}

$user = new User;
$user->name = 'john';
$user->age = 25;

// Вызовем наш метод:
echo $user->show('hello'); // выведет '!!!'
