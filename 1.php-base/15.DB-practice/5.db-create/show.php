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


// $data = dataOutput($link, $query);

if (isset($_GET['id'])) {

    // Пусть id юзера, которого мы хотим просмотреть, передается через GET параметр с именем id. Получим его в переменную
    $id = $_GET['id'];

    // echo $id;

    // Сформируем запрос на получение этого юзера
    $query = "SELECT * FROM example_users WHERE id=$id";
    // echo $query;


    // Выполним запрос
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    // Запишем данные юзера в переменную
    $user = mysqli_fetch_assoc($result);
}

?>

<a href="index1.php">Назад</a>

<br>
<br>

<!-- Выведем эти данные в нашей верстке -->
<div>
    <h1><?= $user['user_name'] ?></h1>
    <p>
        age: <span class="age"><?= $user['user_age'] ?></span>,
        salary: <span class="salary"><?= round((float)$user['user_salary'], 2) ?></span>
    </p>
</div>

<br>
<br>

<div>
    <p>
        имя: <span class="name"><?= $user['user_name'] ?></span>
    </p>
    <p>
        возраст: <span class="age"><?= $user['user_age'] ?></span>,
        зарплата: <span class="salary"><?= round((float)$user['user_salary'], 2) ?></span>,
    </p>
</div>
