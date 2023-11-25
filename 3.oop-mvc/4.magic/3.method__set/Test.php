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


class Test {
    private string $prop1;
    private string $prop2;

    public function __set(string $property, string|int $value) {

        $properties = ['prop1', 'prop2']; // не разрешенные свойства

        // Записываем только в не существующие, не пустые свойства
        if ($property !== '' && !in_array($property, $properties)) {
            $this->$property = $value; // устанавливаем значение
        }
        // if ((string) $property !== 'prop1' && (string) $property !== 'prop2') {
    }


    // public function __set($property, $value) {
    //     switch ($property) {
    //         case 'prop1':
    //             // Если prop1 от 0 до 10:
    //             if ($value > 0 and $value < 10) {
    //                 $this->$property = $value;
    //             }
    //             break;
    //         case 'prop2':
    //             // Если prop2 от 10 до 20:
    //             if ($value > 10 and $value < 20) {
    //                 $this->$property = $value;
    //             }
    //             break;
    //         default:
    //             // Такого свойства нет
    //             break;
    //     }
    // }




    public function __get($property) {
        return $this->$property;
    }
}
