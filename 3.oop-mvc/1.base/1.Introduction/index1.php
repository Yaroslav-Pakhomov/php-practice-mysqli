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


// Введение в классы и объекты

class Car {
    // тут код, то есть PHP-чертеж автомобиля
    public string $color; // цвет автомобиля
    public int $fuel; // количество топлива

    // Команда ехать:
    public function go(): void {
        // какой-то PHP код
    }

    // Команда поворачивать:
    public function turn(): void {
        // какой-то PHP код
    }

    // Команда остановиться:
    public function stop(): void {
        // какой-то PHP код
    }
}


$myCar = new Car; // командуем заводу сделать автомобиль

// Устанавливаем свойства объекта:
$myCar->color = 'red'; // красим в красный цвет
$myCar->fuel = 50; // заливаем топливо

$myCar->go();   // автомобиль->едь
$myCar->turn(); // автомобиль->поверни
$myCar->stop(); // автомобиль->остановись
