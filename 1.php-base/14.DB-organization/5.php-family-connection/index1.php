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

// Данные для подключения
$host = 'localhost';            // имя хоста
$user = 'root';                 // имя пользователя
$pass = 'root';                 // пароль
$name = 'db_organization';      // имя базы данных


// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

/**
 * Функция для проверки и отладки запросов, возвращает массив данных
 *
 * @param mysqli $link подключение
 * @param string $query запрос
 * @return array $data массив данных
 */
function dataOutput(mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return $data;
}

// Получение данных из связанных таблиц в PHP

// SELECT поля FROM имя_таблицы
// 	LEFT JOIN имя_связанной_таблицы ON условие_связи
// WHERE условие_выборки


// Отдельные части синтаксиса этой команды:

// Поля:
// SELECT users.*, cities.* - выбираем данные из всех таблиц, SELECT users.name, cities.name as city_name - можно перечислить нужные нам поля с указанием имени таблицы перед ними, для решения проблемы нужно конфликтные имена переименовывать через команду as.

// Связь:
// ON cities.id=users.city_id - после команды ON мы должны указать поля из двух таблиц, по которым осуществляется связь. В нашем случае это будет поле id из таблицы с городами и поле city_id из таблицы с юзерами


// Запрос
$query = 'SELECT

example_users.user_name as user_name, example_users_sons.user_name as son_name

FROM example_users

INNER JOIN example_users as example_users_sons

ON example_users_sons.id = example_users.son_id';


$data = dataOutput($link, $query);

echo '<br>';
echo '<br>';
echo '<br>';

foreach ($data as $user) {
    echo 'Отец - ' . $user['user_name'] . ', сын - ' . $user['son_name'] . '<br>';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Запрос
$query = 'SELECT

product_categories.`category_title` as category_title, par_product_categories.`category_title` as par_category_title

FROM product_categories

INNER JOIN product_categories AS par_product_categories

ON par_product_categories.id = product_categories.par_category';


$data = dataOutput($link, $query);

// print_r($data);

foreach ($data as $category) {
    echo 'Категория - ' . $category['category_title'] . ', родительская категория - ' . $category['par_category_title'] . '<br>';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Запрос
$query = 'SELECT

product_categories.`category_title` as category_title, par_product_categories.`category_title` as par_category_title, par_par_product_categories.`category_title` as par_par_category_title

FROM product_categories

INNER JOIN product_categories AS par_product_categories

INNER JOIN product_categories AS par_par_product_categories

ON par_par_product_categories.id = par_product_categories.par_category

ON par_product_categories.id = product_categories.par_category';


$data = dataOutput($link, $query);

// print_r($data);


foreach ($data as $category) {
    echo 'Категория - ' . $category['category_title'] . ', родительская категория - ' . $category['par_category_title'] . ', прародительская категория - ' . $category['par_par_category_title'] . '<br>';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Запрос
$query = 'SELECT

product_categories.`category_title` as category_title, par_product_categories.`category_title` as par_category_title, par_par_product_categories.`category_title` as par_par_category_title, par_par_par_product_categories.`category_title` as par_par_par_category_title

FROM product_categories

INNER JOIN product_categories AS par_product_categories

INNER JOIN product_categories AS par_par_product_categories

INNER JOIN product_categories AS par_par_par_product_categories

ON par_par_par_product_categories.id = par_par_product_categories.par_category

ON par_par_product_categories.id = par_product_categories.par_category

ON par_product_categories.id = product_categories.par_category';

$data = dataOutput($link, $query);

// print_r($data);


foreach ($data as $category) {
    echo 'Категория - ' . $category['category_title'] . ', родительская категория - ' . $category['par_category_title'] . ', прародительская категория - ' . $category['par_par_category_title'] . ', прапрародительская категория - ' . $category['par_par_par_category_title'] . '<br>';
    echo '<br>';
    echo '<br>';
}
