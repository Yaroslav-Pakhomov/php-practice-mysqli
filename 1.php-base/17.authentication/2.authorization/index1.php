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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


if (!empty($_SESSION['flash_success'])) {
    echo $_SESSION['flash_success'];
    unset($_SESSION['flash_success']);
    echo '<br>';
    echo '<br>';
}

if (!empty($_SESSION['query'])) {
    echo $_SESSION['query'];
    unset($_SESSION['query']);
    echo '<br>';
    echo '<br>';
}


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
    <title>Document</title>
</head>

<body>
<p>Логин: <?= $_SESSION['login'] ?></p>

<p>Статус: <?= $_SESSION['status'] ?></p>


<a href="users.php">Пользователи</a>
<br>
<br>

<?php if ($_SESSION['auth']) : ?>
    <a href="logout.php">Выйти</a>
    <br>
    <br>
    <p>Логин: <?= $_SESSION['login'] ?></p>
    <p>Видно для авторизованного пользователя.</p>
<?php else : ?>
    <a href="login.php">Войти</a>
    <br>
    <br>
    <a href="register.php">Регистрация</a>
    <br>
    <p>Вы не авторизованы.</p>
<?php endif; ?>

<?php if ($_SESSION['auth']) : ?>
    <a href='profile.php?user_login=<?= $_SESSION['login'] ?>'>Профиль</a>
    <br>
    <br>
    <a href='account.php'>Личный кабинет (редактировать данные)</a>
    <br>
    <br>
    <a href='changePassword.php'>Сменить пароль</a>
    <br>
    <br>
    <a href='accountDelete.php'>Удаление аккаунта</a>
    <br>
    <br>
    <br>

    <a href="1.php">1.php</a>
    <br>
    <a href="2.php">2.php</a>
    <br>
    <a href="3.php">3.php</a>
    <br>
<?php endif; ?>
<?php //print_r($_SESSION); ?>


<?php if ($_SESSION['auth'] && $_SESSION['status'] === 'admin') : ?>
    <h3>Контент Админа</h3>
    <a href="admin.php">Админ-панель</a>
<?php endif; ?>

<?php if ($_SESSION['auth'] && $_SESSION['status'] === 'user') : ?>
    <h3>Контент пользователя</h3>
<?php endif; ?>

</body>

</html>
