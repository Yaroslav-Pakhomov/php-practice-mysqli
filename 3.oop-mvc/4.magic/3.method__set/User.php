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
    private string $name;
    private int $age;

    public function __set($property, $value) {
        switch ($property) {
            case 'name':
                if ($value !== '') {
                    $this->$property = $value;
                    echo 'Имя записано';
                } else {
                    echo 'Пустое имя';
                }
                break;
            case 'age':
                if (0 <= $value && $value <= 70) {
                    $this->$property = $value;
                    echo 'Возраст записан';
                } else {
                    echo 'Возраст не корректен';
                }
                break;
            default:
                echo 'Такого свойства нет';
                break;
        }
        echo '<br>';
    }


    // Используем метод-перехватчик
    public function __get($property) {
        // Если идет обращение к свойству fullname
        if ($property === 'fullname') {
            return $this->name . ' ' . $this->age . ' ';
        }

        return $this->$property;
    }
    // С помощью __get мы создали в классе виртуальное свойство: в классе его нет, но прочитать его можно. Это свойство только для чтения.
}
