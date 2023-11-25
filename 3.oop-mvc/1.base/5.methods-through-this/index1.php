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


// Обращение к методам класса через $this

class User {
    public string $name;
    public int $age;

    // Метод для проверки возраста:
    public function isAgeCorrect(int $age): bool {
        return $age >= 18 && $age <= 60;
    }

    // Метод для изменения возраста юзера:
    public function setAge(int $age): void {
        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        }
    }

    // Метод для добавления к возрасту:
    public function addAge(int $years): void {
        $newAge = $this->age + $years; // вычислим новый возраст

        // Проверим возраст на корректность:
        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge; // обновим, если новый возраст прошел проверку
        }
    }
}

$user = new User;

$user->setAge(30); // установим возраст в 30
echo $user->age; // выведет 30

$user->setAge(10); // установим некорректный возраст
echo $user->age; // не выведет 10, а выведет 30

$user->addAge(10);
