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


// Конструктор объекта в ООП на PHP

// Метод конструктор с названием __construct. Суть в следующем - если в коде класса существует метод с таким названием - он будет вызываться в момент создания объекта.

class UserConstr {
    public string $name;
    public int $age;

    // Конструктор объекта:
    public function __construct(string $name, int $age) {
        $this->name = $name; // запишем данные в свойство name
        $this->age = $age; // запишем данные в свойство age
    }
}

$user = new UserConstr('john', 25); // создадим объект, сразу заполнив его данными

echo $user->name; // выведет 'john'
echo $user->age; // выведет 25
