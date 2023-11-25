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
// $query = 'SELECT u.id, u.`user_name`, c.`city_name` FROM users AS u INNER JOIN cities AS c ON u.city_id = c.id';

$query = 'SELECT

users.user_name, cities.city_name as city_name

FROM users

INNER JOIN cities

ON cities.id = users.city_id';

$data = dataOutput($link, $query);
echo '<br>';

foreach ($data as $user) {
    echo 'Имя - ' . $user['user_name'] . ', город - ' . $user['city_name'] . '.';
    echo '<br>';
    echo '<br>';
}

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Запрос
$query = 'SELECT

p.id, p.`product_title`, pc.`category_title`, p.`price`

FROM product_products AS p

INNER JOIN product_categories AS pc

ON p.category_id = pc.id';

$data = dataOutput($link, $query);

foreach ($data as $product) {
    echo 'ID товара - ' . $product['id'] . ', название - ' . $product['product_title'] . ', категория - ' . $product['category_title'] . ', цена - ' . round((float)$product['price'], 2) . '.';
    echo '<br>';
    echo '<br>';
}
