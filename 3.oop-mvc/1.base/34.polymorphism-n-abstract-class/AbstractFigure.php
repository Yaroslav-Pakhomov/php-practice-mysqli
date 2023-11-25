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

abstract class AbstractFigure {

    // Метод для вычисления отношения площади к периметру:
    public function getRatio(): float|int {
        return $this->getSquare() / $this->getPerimeter();
    }

    // Метод для вычисления суммы площади и периметра
    public function getSquarePerimeterSum() {
        return $this->getSquare() + $this->getPerimeter();
    }

    // Абстрактный метод без тела, реализует полиморфизм в наследниках
    abstract public function getSquare();

    // Абстрактный метод без тела, реализует полиморфизм в наследниках
    abstract public function getPerimeter();

    // При наследовании от абстрактного класса, все методы, помеченные абстрактными (abstract) в родительском классе, должны быть определены в дочернем классе.

    // При этом область видимости этих методов должна совпадать или быть менее строгой: например, если абстрактный метод объявлен как protected, то реализация этого метода должна быть protected или public, но не private.
}
