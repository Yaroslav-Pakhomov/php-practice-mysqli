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

$query = "SELECT accounts.id, `login`, `email`, `status_id`, accounts_statuses.name as accounts_statuses_name FROM accounts LEFT JOIN accounts_statuses ON accounts.status_id=accounts_statuses.id";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!empty($_SESSION['flash_success'])) {
    echo $_SESSION['flash_success'];
    unset($_SESSION['flash_success']);
    echo '<br>';
    echo '<br>';
}

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

if (!empty($_GET['delete'])) {

    $id = $_GET['delete'];

    $select = "SELECT * FROM accounts WHERE `id`=$id";

    $user = dataOutput($link, $select);
    $user = $user[0];

    $delete = "DELETE FROM accounts WHERE `id`=$id";

    $success = mysqli_query($link, $delete);

    $_SESSION['flash_success'] = (!empty($user['login']) && $success) ? 'Пользователь ' . $user['login'] . ' успешно удалён' : 'Пользователь не найден.';

    header('Location: admin.php');
}

if (!empty($_GET['status'])) {
    $id = $_GET['status'];

    $select = "SELECT `status_id` FROM accounts WHERE `id`=$id";

    $user = dataOutput($link, $select);
    $status = (int)$user[0]['status_id'];

    if ($status === 1) {
        $update = "UPDATE accounts SET status_id = 2 WHERE id=$id";
    } else {
        $update = "UPDATE accounts SET status_id = 1 WHERE id=$id";
    }

    $success = mysqli_query($link, $update);

    $_SESSION['flash_success'] = $success ? 'Права успешно изменены' : 'Пользователь не найден.';

    header('Location: admin.php');
}


$users = dataOutput($link, $query);

echo basename(__FILE__);
echo '<br>';
echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>Админ-панель</title>
</head>

<body>
<h1>Админ-панель</h1>

<p>Логин: <?= $_SESSION['login'] ?></p>

<p>Статус: <?= $_SESSION['status'] ?> </p>


<a href="index1.php">index1.php</a>

<br>
<br>

<table class="table">
    <thead>
    <tr>
        <th>
            № п/п
        </th>
        <th>
            ID
        </th>
        <th>
            Профиль
        </th>
        <th>
            Статус
        </th>
        <!-- <th>
            Статус ID
        </th> -->
        <th>
            Почта
        </th>
        <th>
            Действия
        </th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach ($users as $user) : ?>
        <?php
        $color = ($user['accounts_statuses_name'] === 'user') ? ' #198754' : '#dc3545';
        ?>

        <tr>
            <td>
                <?= $i ?>
            </td>
            <td>
                <?= $user['id'] ?>
            </td>
            <td>
                <a href='profile.php?user_login=<?= $user['login'] ?>' style="color: #0d6efd"><?= $user['login'] ?></a>
            </td>
            <!-- <td style="color: <?= $color ?>;">
                        <?php //= $user['status'] ?>
                    </td> -->
            <td style="color: <?= $color ?>;">
                <?= $user['accounts_statuses_name'] ?>
            </td>
            <td>
                <?= $user['email'] ?>
            </td>
            <td style="text-align: center; color: #0d6efd">
                <a href='?delete=<?= $user['id'] ?>' style="color: #0d6efd">Удалить</a>
                <br>
                <?php if ($user['accounts_statuses_name'] === 'user') : ?>
                    <a href="?status=<?= $user['id'] ?>" style="color: #0d6efd">Сделать админом</a>
                <?php else : ?>
                    <a href="?status=<?= $user['id'] ?>" style="color: #0d6efd">Сделать пользователем</a>

                <?php endif; ?>
            </td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
    </tbody>
</table>

</body>

</html>
