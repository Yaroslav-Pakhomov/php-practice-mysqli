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

// Такое название выбрано потому, что сообщение должно показаться только один раз, а при обновлении страницы исчезнуть.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Вывод сообщения об успехе, должен идти до проверки отправки формы
if (isset($_SESSION['flash'])) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
}

if (!empty($_POST['add_user'])) {
    // сохраняем в базу
    $_SESSION['user_name'] = $_POST['name'];
    $_SESSION['user_age'] = $_POST['age'];
    $_SESSION['user_salary'] = $_POST['salary'];

    if (!empty($_SESSION['user_name']) && !empty($_SESSION['user_age']) && !empty($_SESSION['user_salary'])) {

        $query = "INSERT INTO example_users SET user_name='" . $_SESSION['user_name'] . "', user_age='" . $_SESSION['user_age'] . "', user_salary='" . $_SESSION['user_salary'] . "'";

        // Выполним этот запрос
        $exec = mysqli_query($link, $query) or die(mysqli_error($link));

        $_SESSION['flash'] = 'Форма успешно сохранена.';
        // Редирект на другую страницу
        header('Location: index1.php');

    } else {
        $_SESSION['flash'] = 'Форма не прошла проверку.';
        header('Location: form.php');
    }
}


?>

<br>
<br>
<br>

<form action="" method="POST">
    <label>
        <input name="name" placeholder="Имя пользователя" value="<?= $_SESSION['user_name'] ?? '' ?>">
    </label>
    <label>
        <input name="age" placeholder="Возраст пользователя" value="<?= $_SESSION['user_age'] ?? '' ?>">
    </label>
    <label>
        <input name="salary" placeholder="ЗП пользователя" value="<?= $_SESSION['user_salary'] ?? '' ?>">
    </label>

    <input type="submit" name="add_user" value="Добавить пользователя">
</form>
