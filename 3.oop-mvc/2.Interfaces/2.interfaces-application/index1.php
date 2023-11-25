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


// Применение интерфейсов. Применение интерфейсов в ООП

require_once './FiguresCollection.php';
require_once './Quadrature.php';
require_once './Rectangle.php';

$figures_collection = new FiguresCollection();

// Добавим парочку квадратов
$figures_collection->addFigure(new Quadrature(2));
$figures_collection->addFigure(new Quadrature(3));

// Добавим парочку прямоугольников
$figures_collection->addFigure(new Rectangle(2, 3));
$figures_collection->addFigure(new Rectangle(3, 4));

// class Test {}; // какой-то другой класс
// $figures_collection->addFigure(new Test()); // выдаст ошибку
