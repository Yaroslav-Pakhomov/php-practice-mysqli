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

if (!empty($_POST['submit'])) {

    $login = $_POST['login'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];

    $query = "UPDATE accounts SET login='$login', email='$email', birthday='$birthday' WHERE id='$id'";
    mysqli_query($link, $query);
}

echo basename(__FILE__);

echo '<br>';
echo '<br>';

?>

<br>

<h1>Личный кабинет</h1>

<a href="index1.php">index1.php</a>
<br>
<br>

<form action="" method="POST">
    <label>
        <input name="login" value="<?= $user['login'] ?>">
    </label>
    <br><br>
    <label>
        <input name="email" value="<?= $user['email'] ?>">
    </label>
    <br><br>
    <label>
        <input name="birthday" value="<?= $user['birthday'] ?>">
    </label>
    <br><br>
    <input type="submit" name="submit" value="Редактировать данные">
</form>


<br>
<br>
<br>
