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


class User {

    public string $surname;
    public string $name;
    public string $patronymic;

    // Используем метод-перехватчик
    public function __get($property) {
        // Если идет обращение к свойству fullname
        if ($property === 'fullname') {
            return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
        }

        return $this->$property;
    }
    // С помощью __get мы создали в классе виртуальное свойство: в классе его нет, но прочитать его можно. Это свойство только для чтения.
}
