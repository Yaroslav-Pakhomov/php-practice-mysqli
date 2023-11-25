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


echo '<br>';
echo '<br>';

echo '3.php';
?>


<br>
<br>
<?php if ($_SESSION['auth']) : ?>
    <a href="logout.php">Выйти</a>
    <br>
    <p>Логин: <?= $_SESSION['login'] ?></p>
<?php else : ?>
    <a href="login.php">Войти</a>
    <br>
    <a href="register.php">Регистрация</a>
    <br>
    <p>Вы не авторизованы.</p>
<?php endif; ?>
<br>

<a href="index1.php">index1.php</a>
<br>
