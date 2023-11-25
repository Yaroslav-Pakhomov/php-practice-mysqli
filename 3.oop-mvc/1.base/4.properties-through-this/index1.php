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


// Обращение к свойствам класса через $this

class User {
    public string $name;
    public int $age;

    public function show(): string {
        // Возвращаем имя:
        return $this->name;
    }

    // Метод для изменения имени юзера:
    public function setName($name): void {
        $this->name = $name; // запишем новое значение свойства name
    }
}

$user = new User; // создаем объект класса
$user->name = 'john'; // записываем имя
$user->age = 25; // записываем возраст

// Вызываем наш метод:
echo $user->show(); // выведет 'john'

echo '<br>';
echo '<br>';
// Установим новое имя:
$user->setName('eric');

// Проверим, что имя изменилось:
echo $user->name; // выведет 'eric'
