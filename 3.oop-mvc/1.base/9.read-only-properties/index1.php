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


// Свойства только для чтения в ООП


class User {
    private string $name;
    private int $age;

    // Конструктор объекта:
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Геттер для имени:
    public function getName(): string {
        return $this->name;
    }

    // Геттер для возраста:
    public function getAge(): int {
        return $this->age;
    }

    // Сеттер для возраста:
    public function setAge($age): void {
        $this->age = $age;
    }
}


$user = new User('john', 25); // создаем объект с начальными данными

// Имя можно только читать, но нельзя поменять:
echo $user->getName(); // выведет 'john'

// Возраст можно и читать, и менять:
echo $user->getAge(); // выведет 25
$user->setAge(30); // установим возраст в значение 30
echo $user->getAge(); // выведет 30
