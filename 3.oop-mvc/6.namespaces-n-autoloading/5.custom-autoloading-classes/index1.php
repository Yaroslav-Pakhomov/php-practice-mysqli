<?php

declare(strict_types=1);

use Core\Admin\PageController as AdminPageController;

// подключаем класс и устанавливаем псевдонимы классов


// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');


// Своя функция для автозагрузки классов
// В функцию spl_autoload_register первым параметром передаём написанную вами функцию-коллбэк


// Правило:
// Путь к файлу класса от корня сайта такой же, как и пространство имен с сохранением регистра символов.
// То есть класс Core\Admin\PageController - путь Core/Admin/PageController.php.
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


$adminPageController1 = new AdminPageController(1);
$adminPageController2 = new AdminPageController(2);

echo '<br>';
echo '<br>';

echo 'Попал';
