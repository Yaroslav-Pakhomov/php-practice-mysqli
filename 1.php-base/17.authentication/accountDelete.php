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

if (!empty($_SESSION['flash_success'])) {
    echo $_SESSION['flash_success'];
    unset($_SESSION['flash_success']);
    echo '<br>';
    echo '<br>';
}

echo basename(__FILE__);
echo '<br>';
echo '<br>';


if (!empty($_POST['accountDelete'])) {
    $id = $_SESSION['id'];
    $query = "SELECT * FROM accounts WHERE id='$id'";

    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    // print_r($user);
    // echo '<br>';
    // echo '<br>';
    // print_r($_POST);

    // введённый пароль
    $password = $_POST['password'];

    // соленый пароль из БД
    $hash = $user['password'];

    // Проверяем соответствие хеша из базы введенному старому паролю
    $password_verify = password_verify($password, $hash);

    if ($password_verify && !empty($password)) {
        $query = "DELETE FROM accounts WHERE id='$id'";

        echo 'Попал';
        echo '<br>';
        echo '<br>';
        echo $query;

        $_SESSION['flash_success'] = 'Пользователь ' . $user['login'] . ' успешно удалён';
        $_SESSION['query'] = $query;
        $_SESSION['auth'] = FALSE;

        mysqli_query($link, $query);

        header('Location: index1.php');
    } else {
        $_SESSION['flash_success'] = 'Не правильный пароль';
    }
}

?>


<h1>Удалить аккаунт</h1>

<a href="index1.php">index1.php</a>
<br>
<br>
<p>Логин: <?= $_SESSION['login'] ?></p>
<p>ID: <?= $_SESSION['id'] ?></p>
<p>Статус: <?= $_SESSION['status'] ?></p>

<form action="" method="POST">
    <label for="password">
        Введите пароль
        <input name="password" type="password" id="password">
    </label>
    <br>
    <br>
    <input type="submit" name="accountDelete" value="Удалить аккаунт">
</form>
