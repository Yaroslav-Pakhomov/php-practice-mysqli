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

require_once './iFigure.php';

class FiguresCollection {

    private array $figures = []; // массив для фигур

    public function addFigure(iFigure $figure): void {
        $this->figures[] = $figure;
    }

    public function getTotalSquare(): int {
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getSquare();  // используем метод getSquare
        }

        return $sum;
    }

    public function getTotalPerimeter(): int {
        $sum = 0;
        foreach ($this->figures as $figure) {
            $sum += $figure->getPerimeter();  // используем метод getSquare
        }

        return $sum;
    }
}
