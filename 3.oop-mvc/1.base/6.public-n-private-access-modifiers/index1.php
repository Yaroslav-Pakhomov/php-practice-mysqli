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

    // Метод для проверки возраста:
    private function isAgeCorrect(int $age): bool {
        return $age >= 18 && $age <= 60;
    }

}

$user = new User;

$user->setAge(30); // установим возраст в 30
echo $user->age; // выведет 30

$user->setAge(10); // установим некорректный возраст
echo $user->age; // не выведет 10, а выведет 30

// Существует специальное правило: если вы делаете новый метод и не знаете, сделать его публичным или приватным, - делайте приватным. В дальнейшем, если он понадобится снаружи, — вы поменяете его на публичный.

// Еще раз резюмируем: слова public и private не нужны для реализации логики программы, а нужны для того, чтобы уберечь программистов от ошибок.
