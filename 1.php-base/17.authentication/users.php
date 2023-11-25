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
$query = 'SELECT * FROM accounts';

$users = dataOutput($link, $query);

echo '<br>';
echo '<br>';

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

    <title>Document</title>
</head>
<body>

<a href="index1.php">index1.php</a>
<br>
<br>
<p>Логин: <?= $_SESSION['login'] ?></p>

<p>Статус: <?= $_SESSION['status'] ?></p>


<?php if (!empty($users)) : ?>
    <table class="table">
        <thead>
        <tr>
            <th>
                Пользователь
            </th>
            <th>
                Профиль
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td>
                    <?= $user['id'] ?>
                </td>
                <td>
                    <a href='profile.php?user_login=<?= $user['login'] ?>'><?= $user['login'] ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php else :

    // Переадресация на вход
    header('Location: login.php');

endif; ?>

</body>
</html>
