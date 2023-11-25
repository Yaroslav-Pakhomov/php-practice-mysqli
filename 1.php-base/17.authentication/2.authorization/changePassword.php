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

$id = $_SESSION['id'];
$query = "SELECT * FROM accounts WHERE id='$id'";

$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

echo basename(__FILE__);
echo '<br>';
echo '<br>';

if (!empty($_POST['password'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $new_password_confirm = $_POST['new_password_confirm'];

    // соленый пароль из БД
    $hash = $user['password'];

    // Проверяем соответствие хеша из базы введенному старому паролю
    $password_verify = password_verify($old_password, $hash);

    if ($password_verify && !empty($new_password) && $new_password === $new_password_confirm) {
        // user5 пароль 123456789
        $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
        $query = "UPDATE accounts SET password='$new_password_hash' WHERE id='$id'";
        mysqli_query($link, $query);
    } else {
        echo 'Текущий пароль введён неверно, введите новый пароль.';
    }
}


?>

<h1>Смена пароля</h1>

<a href="index1.php">index1.php</a>
<br>
<br>
<p>Логин: <?= $_SESSION['login'] ?></p>

<p>Статус: <?= $_SESSION['status'] ?></p>

<form action="" method="POST">
    <label for="old_password">
        Старый пароль
        <input name="old_password" type="password" id="old_password">
    </label>
    <br>
    <br>
    <label for="new_password">
        Новый пароль
        <input name="new_password" type="password" id="new_password">
    </label>
    <br>
    <br>
    <label for="new_password_confirm">
        Подтверждение нового пароля
        <input name="new_password_confirm" type="password" id="new_password_confirm">
    </label>
    <br>
    <br>
    <input type="submit" name="password" value="Сменить пароль">
</form>
