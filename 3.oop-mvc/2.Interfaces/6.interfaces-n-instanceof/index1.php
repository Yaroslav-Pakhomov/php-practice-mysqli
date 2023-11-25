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


// Наследование интерфейсов друг от друга
require_once './Rectangle.php';

$rectangle = new Rectangle(2, 3);

var_dump($rectangle instanceof Rectangle);

echo '<br>';
echo '<br>';

var_dump($rectangle instanceof iRectangle);

echo '<br>';
echo '<br>';

var_dump($rectangle instanceof iFigure);
