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

// объектов класса AbstractUser не будет

abstract class AbstractUser {
    private string $name;

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    // Абстрактный метод без тела, реализует полиморфизм в наследниках
    abstract public function increaseRevenue(float $value);

    // Абстрактный метод без тела, реализует полиморфизм в наследниках
    abstract public function decreaseRevenue(float $value);

    // При наследовании от абстрактного класса, все методы, помеченные абстрактными (abstract) в родительском классе, должны быть определены в дочернем классе.

    // При этом область видимости этих методов должна совпадать или быть менее строгой.
}
