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
 * @param false|mysqli $link подключение
 * @param string $query запрос
 *
 * @return array $data массив данных
 */
function dataOutput(false|mysqli $link, string $query): array {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    }

    return $data;
}

// Запрос
$query = 'SELECT * FROM example_users';

$data = dataOutput($link, $query);

if (!empty($_GET['del'])) {

    // Пусть у нас передается GET параметр с именем del. Давайте получим id для удаления в переменную
    $del = $_GET['del'];

    // echo $del;

    // Сформируем запрос на удаление
    $query = "DELETE FROM example_users WHERE id=$del";
    // echo $query;


    // Удалим запись из базы данных
    // mysqli_query($link, $query) or die(mysqli_error($link));
}

?>

<br>
<br>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>salary</th>
        <th>action</th>
    </tr>
    <?php foreach ($data as $elem) : ?>
        <tr>
            <th><?= $elem['id'] ?></th>
            <th><?= $elem['user_name'] ?></th>
            <th><?= $elem['user_age'] ?></th>
            <th><?= round((float)$elem['user_salary'], 2) ?></th>
            <th>
                <p>
                    <a href="show.php?id=<?= $elem['id'] ?>">Просмотр</a>
                </p>
                <p>
                    <a href="?del=<?= $elem['id'] ?>">Удалить</a>
                </p>
            </th>
        </tr>
    <?php endforeach; ?>
</table>

<br>
<br>

<ul>
    <?php foreach ($data as $elem) : ?>
        <li><?= $elem['user_name'] ?> <a href="show.php?id=<?= $elem['id'] ?>">просмотреть</a>, <a
                    href="?del=<?= $elem['id'] ?>"> удалить</a></li>

    <?php endforeach; ?>
</ul>
