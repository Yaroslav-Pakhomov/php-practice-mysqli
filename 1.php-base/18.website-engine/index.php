<?php
/**
 * ----------------------------------------------------------------
 * Для корректной работы переместить в корневую директорию сервера
 * ----------------------------------------------------------------
 */

declare(strict_types=1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

require_once 'connect.php';

// $result = dataOutput($link, $query);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// echo basename(__FILE__);
// echo '<br>';
// echo '<br>';

// Запрошенный URL
$url = $_SERVER['REQUEST_URI'];

// ---------------------------------
// Страницы по директории
// ---------------------------------
if (preg_match('#/view/([a-z0-9_-]+)#', $url, $match)) {
    // echo '/';
    echo file_get_contents('./' . parse_url($url, PHP_URL_PATH) . '.php');
    // print_r($match);
    // exit;
}
// Необходимый файл из которого нужно взять содержимое
$file = ($url !== '/') ? 'view/' . $url . '.php' : 'view/main.php';
$content = file_exists($file) ? file_get_contents($file) : file_get_contents('view/404.php');

// Извлекаем title с помощью регулярного выражения
preg_match('#{{ title: "(.+?)" }}#', $content, $match);
// в тексте контента удалим не нужную больше команду
$content = preg_replace('#{{ title: "(.+?)" }}#', '', $content);

// Либо заголовок страницы, либо по умолчанию
$title = $match[1] ?? 'Заголовок по умолчанию';
// ---------------------------------
// Страницы по директории - конец
// ---------------------------------

// ---------------------------------
// Маршруты(роуты) по ID
// ---------------------------------
// <id> - для роутинга с именованными параметрами
if (preg_match('#/id/(?<id>\d+)#', $url, $match)) {
    $id = $match['id'];

    $query = "SELECT * FROM website_engine_pages WHERE id=$id";
    $page = dataOutput($link, $query)[0] ?? ['title' => '', 'content' => ''];

    if (empty($page['content']) || (empty($page['title']) && empty($page['content']))) {
        $content = file_get_contents('view/404.php');

        // Извлекаем title с помощью регулярного выражения
        preg_match('#{{ title: "(.+?)" }}#', $content, $match);

        // Либо заголовок страницы, либо по умолчанию
        $title = $match[1];
        // в тексте контента удалим не нужную больше команду, заменяем {{...}} на ''
        $content = preg_replace('#{{ title: "(.+?)" }}#', '', $content);
    } else {
        $title = $page['title'] ?? 'Заголовок по умолчанию';
        $content = 'ID' . $page['content'];
    }
}
// ---------------------------------
// Маршруты(роуты) по ID - конец
// ---------------------------------

// ---------------------------------
// Маршруты(роуты) по slug (ЧПУ)
// ---------------------------------
// <slug> - для роутинга с именованными параметрами
if (preg_match('#/slug/(?<slug>[a-z0-9_-]+)#', $url, $match)) {
    $slug = $match['slug'];

    $query = "SELECT * FROM website_engine_pages WHERE slug='$slug'";
    $page = dataOutput($link, $query)[0] ?? ['title' => '', 'content' => ''];

    if (empty($page['content']) || (empty($page['title']) && empty($page['content']))) {
        $content = file_get_contents('view/404.php');

        // Извлекаем title с помощью регулярного выражения
        preg_match('#{{ title: "(.+?)" }}#', $content, $match);

        // Либо заголовок страницы, либо по умолчанию
        $title = $match[1];
        // в тексте контента удалим не нужную больше команду, заменяем {{...}} на ''
        $content = preg_replace('#{{ title: "(.+?)" }}#', '', $content);
    } else {
        $title = $page['title'] ?? 'Заголовок по умолчанию';
        $content = 'Slug' . $page['content'];
    }
}
// ---------------------------------
// Маршруты(роуты) по slug (ЧПУ) - конец
// ---------------------------------

// Несколько параметров в роутах движка
// /page/:category/:page
// $route = '/page/(?<catSlug>[a-z0-9_-]+)/(?<pageSlug>[a-z0-9_-]+)';
// preg_match("#$route#", $url, $params)
// $catSlug = $params['catSlug'];
// $pageSlug = $params['pageSlug'];

// ---------------------------------
// Содержимое страницы
// ---------------------------------
$layout = file_get_contents('layout.php');
$layout = str_replace(['{{ title }}', '{{ content }}'], [$title, $content], $layout);
// ---------------------------------
// Содержимое страницы - конец
// ---------------------------------

echo $layout;


$string = 'The quick brown fox jumps over the lazy dog.';
$patterns = [];
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = [];
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';

// echo $string . '<br>'; // The quick brown fox jumps over the lazy dog.
// echo preg_replace($patterns, $replacements, $string); // The bear black slow jumps over the lazy dog.


// // Необходимый файл из которого нужно взять содержимое
// $file = ($url !== '/') ? 'view' . $url . '.php' : 'view/main.php';

// // Содержимое страницы
// // $content = file_exists($file) ? file_get_contents($file) : file_get_contents('view/404.php');
// if (file_exists($file)) {
//     $content = file_get_contents($file);
// } else {
//     header('HTTP/1.0 404 Not Found');
//     $content = file_get_contents('view/404.php');
// }

// // Извлекаем title с помощью регулярного выражения
// preg_match('#{{ title: "(.+?)" }}#', $content, $match);
// // в тексте контента удалим не нужную больше команду
// $content = preg_replace('#{{ title: "(.+?)" }}#', '', $content);

// // Либо заголовок страницы, либо по умолчанию
// $title = $match[1] ?? 'Заголовок по умолчанию';
