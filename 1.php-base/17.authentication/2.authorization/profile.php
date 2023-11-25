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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo basename(__FILE__);
echo '<br>';
echo '<br>';

if (!empty($_GET['user_login'])) {

    $login = $_GET['user_login'];

    // получаем юзера по id
    $query = 'SELECT * FROM accounts WHERE login="' . $login . '"';

    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if (!empty($user) && !empty($user['birthday'])) {
        $years = time() - strtotime($user['birthday']);
        $years = floor($years / (60 * 60 * 24 * 365));
    }
}


echo '<br>';
echo '<br>';

echo basename(__FILE__);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


?>


<a href="index1.php">index1.php</a>
<br>
<br>
<p>Логин: <?= $_SESSION['login'] ?></p>

<p>Статус: <?= $_SESSION['status'] ?></p>


<?php if (!empty($user)) : ?>

    <table class="table">
        <thead>
        <tr>
            <th>
                Параметр
            </th>
            <th>
                Значение
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                ID
            </td>
            <td>
                <?= $user['id'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Логин
            </td>
            <td>
                <?= $user['login'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Почта
            </td>
            <td>
                <?= $user['email'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Статус
            </td>
            <td>
                <?= $user['status'] ?>
            </td>
        </tr>
        <tr>
            <td>
                День рождение
            </td>
            <td>
                <?= $user['birthday'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Возраст
            </td>
            <td>
                <?= $years ?? '' ?>
            </td>
        </tr>
        </tbody>
    </table>

<?php else :

    header('Location: login.php');

endif; ?>

<br>
<br>
<br>
<br>
<br>
<br>
<style>
    .table {
        width: 100%;
        border: none;
        margin-bottom: 20px;
        border-collapse: separate;
    }

    .table thead th {
        font-weight: bold;
        text-align: center;
        border: none;
        padding: 10px 15px;
        background: #EDEDED;
        font-size: 14px;
        border-top: 1px solid #ddd;
    }

    .table tr th:first-child,
    .table tr td:first-child {
        border-left: 1px solid #ddd;
    }

    .table tr th:last-child,
    .table tr td:last-child {
        border-right: 1px solid #ddd;
    }

    .table thead tr th:first-child {
        border-radius: 20px 0 0 0;
    }

    .table thead tr th:last-child {
        border-radius: 0 20px 0 0;
    }

    .table tbody td {
        text-align: left;
        border: none;
        padding: 10px 15px;
        font-size: 14px;
        vertical-align: top;
    }

    .table tbody tr:nth-child(even) {
        background: #F8F8F8;
    }

    .table tbody tr:last-child td {
        border-bottom: 1px solid #ddd;
    }

    .table tbody tr:last-child td:first-child {
        border-radius: 0 0 0 20px;
    }

    .table tbody tr:last-child td:last-child {
        border-radius: 0 0 20px 0;
    }
</style>
