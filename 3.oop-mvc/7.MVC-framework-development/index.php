<?php

declare(strict_types=1);

namespace Core;

//use Core\Router;
//use Core\Dispatcher;
//use Core\View;

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');


// Автозагрузка классов
spl_autoload_register(static function ($class) {
    // в переменной $class будет имя класса с пространством имен

    // Для получения абсолютного пути до директории файла
    $root = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);

    // Учитывается операционная система для слэша
    $ds = DIRECTORY_SEPARATOR;

    // Замена слэшей '/','\' на слэши для операционной системы
    $root = str_replace(['\\', '/'], [$ds, $ds], $root);

    $class = str_replace(['\\', '/'], [$ds, $ds], $class);

    // Преобразования имени класса меняем обратные слэши на прямые, а к имени класса добавляем .php
    $filename = $root . $ds . $class . '.php';

    // Выполняем загрузку по имени класса
    require($filename);
});

echo "Попал";

// Путь до директории текущего файла
$current_file_path_directory = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);

// Прочитываем массив из файла с роутами в переменную:
$routes = require $current_file_path_directory . '/project/config/routes.php';

// Определяет, какой из роутов соответствует данному $uri
$track = (new Router())->getTrack($routes, $_SERVER['REQUEST_URI']);

// Вызов диспетчера
$page = (new Dispatcher())->getPage($track);

// Вызов класса View - визуализатора
echo (new View())->render($page);

// echo '<pre>';
// print_r($routes);
// echo '</pre>';
